<?php
//php artisan make:migration create_messages_tables --create=messages
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use DataTables;
use URL;

class ATSController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function search(Request $request)
    {
        $data = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->leftjoin('additional_informations','additional_informations.message_id','=','messages.id')
        ->get();
        
        if($request->ajax())
        {
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<button data-bs-toggle="modal" data-bs-target="#message-box" type="button" class="btn btn-secondary text-white"><i class="bi bi-search"></i></button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('search');
    }
    public function searchPost(Request $request)
    {
        $validateData = $request->validate([
            'msg-type' => 'required',
        ]);
        //dump($validateData['msg-type']);
        $type = $validateData['msg-type'];

        if($type == 'FPL')
        {
            return redirect()->route('fplMessages');
        }
        if($type == 'CHG')
        {
            return redirect()->route('chgMessages');
        }
        if($type == 'DLA')
        {
            $originator = $request->originator;
            $dep_id = $request->dep;
            $aircraft_id = $request['aircraft-id'];
            $dest_id = $request->dest;
            $dof = $request->dof;
            //return redirect("/dla-messages?originator=$request->originator");
            return redirect()->route('dlaMessages',['originator'=>$originator,'aircraft_id'=>$aircraft_id,'dep_id'=>$dep_id,'dest_id'=>$dest_id,'dof'=>$dof]);
        }
        if($type == 'CNL')
        {
            return redirect()->route('cnlMessages');
        }
        if($type == 'DEP')
        {
            return redirect()->route('depMessages');
        }
        if($type == 'ARR')
        {
            return redirect()->route('arrMessages');
        }
    }
    public function chgMessages(Request $request)
    {
        $data = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->leftjoin('additional_informations','additional_informations.message_id','=','messages.id')
        ->where('messages.type','CHG')->where('aftn_header.originator',$request->originator)
        ->select('*','messages.id as id')
        ->get();
        
        if($request->ajax())
        {
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = '<a href="/chg-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('chg-messages');
    }
    public function fplMessages(Request $request)
    {
        $data = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->leftjoin('additional_informations','additional_informations.message_id','=','messages.id')
        ->where('type','FPL')->select('*','messages.id as id')
        ->get();
        
        if($request->ajax())
        {
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = '<a href="/fpl-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('fpl-messages');
    }
    public function dlaMessages(Request $request)
    {
        $message = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->leftjoin('additional_informations','additional_informations.message_id','=','messages.id')
        ->where('messages.type','DLA');

        if($request->query('originator') != null)
        {
            $message->where('aftn_header.originator',$request->query('originator'));
        }
        if($request->query('aircraft_id') != null)
        {
            $message->where('messages.aircraft_id',$request->query('aircraft_id'));
        }
        if($request->query('from') != null)
        {
            $message->where('messages.created_at',$request->query('from'));
        }
        if($request->query('dep_id') != null)
        {
            $message->where('messages.dep_id',$request->query('dep_id'));
        }
        if($request->query('dest_id') != null)
        {
            $message->where('messages.dest_id',$request->query('dest_id'));
        }
        if($request->query('dof') != null)
        {
            $message->where('messages.dof',$request->query('dof'));
        }
        
        $data = $message->select('*','messages.id as id','aftn_header.originator as originator')->get();
        //dump($data);

        if($request->ajax())
        {
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = '<a href="/dla-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dla-messages',['data' => $data]);
    }
    public function arrMessages(Request $request)
    {
        $data = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->leftjoin('additional_informations','additional_informations.message_id','=','messages.id')
        ->where('type','ARR')->select('*','messages.id as id')
        ->get();
        
        if($request->ajax())
        {
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = '<a href="/arr-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('arr-messages');
    }
    public function cnlMessages(Request $request)
    {
        $data = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->leftjoin('additional_informations','additional_informations.message_id','=','messages.id')
        ->where('type','CNL')->select('*','messages.id as id')
        ->get();
        
        if($request->ajax())
        {
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = '<a href="/cnl-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('cnl-messages');
    }
    public function depMessages(Request $request)
    {
        $data = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->leftjoin('additional_informations','additional_informations.message_id','=','messages.id')
        ->where('type','DEP')->select('*','messages.id as id')
        ->get();
        
        if($request->ajax())
        {
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = '<a href="/dep-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dep-messages');
    }
    public function dlaDetail($id)
    {
        $data = DB::table('messages')->where('id',$id)->first();
        $user = DB::table('users')->where('id',$data->user_id)->first();
        return view ('dla-message-detail',['data'=>$data,'user'=>$user]);
    }
    public function chgDetail($id)
    {
        $data = DB::table('messages')->where('id',$id)->first();
        $user = DB::table('users')->where('id',$data->user_id)->first();
        return view ('chg-message-detail',['data'=>$data,'user'=>$user]);
    }
    public function fplDetail($id)
    {
        $data = DB::table('messages')->where('id',$id)->first();
        $user = DB::table('users')->where('id',$data->user_id)->first();
        $other = DB::table('additional_informations')->where('message_id',$data->id)->first();
        return view ('fpl-message-detail',['data'=>$data,'user'=>$user,'other'=>$other]);
    }
    public function cnlDetail($id)
    {
        $data = DB::table('messages')->where('id',$id)->first();
        $user = DB::table('users')->where('id',$data->user_id)->first();
        return view ('cnl-message-detail',['data'=>$data,'user'=>$user]);
    }
    public function arrDetail($id)
    {
        $data = DB::table('messages')->where('id',$id)->first();
        $user = DB::table('users')->where('id',$data->user_id)->first();
        return view ('arr-message-detail',['data'=>$data,'user'=>$user]);
    }
    public function depDetail($id)
    {
        $data = DB::table('messages')->where('id',$id)->first();
        $user = DB::table('users')->where('id',$data->user_id)->first();
        return view ('dep-message-detail',['data'=>$data,'user'=>$user]);
    }
}
