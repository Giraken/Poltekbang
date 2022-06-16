<?php
//php artisan make:migration create_messages_tables --create=messages
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use DataTables;
use URL;
use PDF;

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

    public function downloadPDF(Request $request){
        // $data = DB::table('messages')
        // ->join('aftn_header','aftn_header.message_id','=','messages.id')
        // ->leftjoin('additional_informations','additional_informations.message_id','=','messages.id')
        // ->get();

        // if($request->ajax())
        // {
        // return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($row){
        //             $actionBtn = '<button data-bs-toggle="modal" data-bs-target="#message-box" type="button" class="btn btn-danger text-white"><i class="bi bi-file-earmark-pdf"></i></button>';
        //             return $actionBtn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        // return view('search');
        $user = DB::find($request->$id);

        $pdf = PDF::loadView('pdf', compact('user'));
        return $pdf->download('invoice.pdf');
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
            $originator = $request->originator;
            $dep_id = $request->dep;
            $aircraft_id = $request['aircraft-id'];
            $dest_id = $request->dest;
            $dof = $request->dof;
            $reg = $request->reg;
            $type = $request->type;
            $route = $request->route;
            return redirect()->route('fplMessages'
            ,['originator'=>$originator,'aircraft_id'=>$aircraft_id,'dep_id'=>$dep_id,'dest_id'=>$dest_id,'dof'=>$dof
            , 'reg'=>$reg,'type'=>$type,'route'=>$route]);
        }
        if($type == 'CHG')
        {
            $originator = $request->originator;
            $dep_id = $request->dep;
            $aircraft_id = $request['aircraft-id'];
            $dest_id = $request->dest;
            $dof = $request->dof;
            return redirect()->route('chgMessages',['originator'=>$originator,'aircraft_id'=>$aircraft_id,'dep_id'=>$dep_id,'dest_id'=>$dest_id,'dof'=>$dof]);
        }
        if($type == 'DLA')
        {
            $originator = $request->originator;
            $dep_id = $request->dep;
            $aircraft_id = $request['aircraft-id'];
            $dest_id = $request->dest;
            $dof = $request->dof;
            return redirect()->route('dlaMessages',['originator'=>$originator,'aircraft_id'=>$aircraft_id,'dep_id'=>$dep_id,'dest_id'=>$dest_id,'dof'=>$dof]);
        }
        if($type == 'CNL')
        {
            $originator = $request->originator;
            $dep_id = $request->dep;
            $aircraft_id = $request['aircraft-id'];
            $dest_id = $request->dest;
            $dof = $request->dof;
            return redirect()->route('cnlMessages',['originator'=>$originator,'aircraft_id'=>$aircraft_id,'dep_id'=>$dep_id,'dest_id'=>$dest_id,'dof'=>$dof]);
        }
        if($type == 'DEP')
        {
            $originator = $request->originator;
            $dep_id = $request->dep;
            $aircraft_id = $request['aircraft-id'];
            $dest_id = $request->dest;
            $dof = $request->dof;
            return redirect()->route('depMessages',['originator'=>$originator,'aircraft_id'=>$aircraft_id,'dep_id'=>$dep_id,'dest_id'=>$dest_id,'dof'=>$dof]);
        }
        if($type == 'ARR')
        {
            $originator = $request->originator;
            $dep_id = $request->dep;
            $aircraft_id = $request['aircraft-id'];
            $ata = $request->ata;
            return redirect()->route('arrMessages',['originator'=>$originator,'aircraft_id'=>$aircraft_id,'dep_id'=>$dep_id,'ata'=>$ata]);
        }
    }
    public function chgMessages(Request $request)
    {
        $message = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->leftjoin('additional_informations','additional_informations.message_id','=','messages.id')
        ->where('messages.type','CHG');

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
            $message->where('messages.time','like',$request->query('from'));
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

        // if($request->ajax())
        // {
        // return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($data){
        //             $actionBtn = '<a href="/chg-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
        //             return $actionBtn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        return view('chg-messages',['data' => $data]);
    }
    public function fplMessages(Request $request)
    {
        $message = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->leftjoin('additional_informations','additional_informations.message_id','=','messages.id')
        ->where('type','FPL');

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
            $message->where('messages.time','like',$request->query('from'));
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
        if($request->query('reg') != null)
        {
            $message->where('messages.fpl_reg',$request->query('reg'));
        }
        if($request->query('type') != null)
        {
            $message->where('messages.fpl_flight_type',$request->query('type'));
        }
        if($request->query('route') != null)
        {
            $message->where('additional_informations.route','like','%'.$request->query('route').'%');
        }

        $data = $message->select('*','messages.id as id','aftn_header.originator as originator')->get();

        // if($request->ajax())
        // {
        // return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($data){
        //             $actionBtn = '<a href="/fpl-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
        //             return $actionBtn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        return view('fpl-messages',['data'=>$data]);
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
            $message->where('messages.time',$request->query('from'));
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

        // if($request->ajax())
        // {
        // return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($data){
        //             $actionBtn = '<a href="/dla-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
        //             return $actionBtn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        return view('dla-messages',['data' => $data]);
    }
    public function arrMessages(Request $request)
    {
        $message = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->leftjoin('additional_informations','additional_informations.message_id','=','messages.id')
        ->where('type','ARR');

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
            $message->where('messages.time','like',$request->query('from'));
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

        // if($request->ajax())
        // {
        // return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($data){
        //             $actionBtn = '<a href="/arr-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
        //             return $actionBtn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        return view('arr-messages',['data'=>$data]);
    }
    public function cnlMessages(Request $request)
    {
        $message = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->leftjoin('additional_informations','additional_informations.message_id','=','messages.id')
        ->where('type','CNL');

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
            $message->where('messages.time',$request->query('from'));
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
        // if($request->ajax())
        // {
        // return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($data){
        //             $actionBtn = '<a href="/cnl-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
        //             return $actionBtn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        return view('cnl-messages',['data'=>$data]);
    }
    public function depMessages(Request $request)
    {
        $message = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->leftjoin('additional_informations','additional_informations.message_id','=','messages.id')
        ->where('type','DEP');

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
            $message->where('messages.time','like',$request->query('from'));
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

        // if($request->ajax())
        // {
        // return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($data){
        //             $actionBtn = '<a href="/dep-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
        //             return $actionBtn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        return view('dep-messages',['data'=>$data]);
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
    public function freetextDetail($id)
    {
        $data = DB::table('messages')->where('id',$id)->first();
        $user = DB::table('users')->where('id',$data->user_id)->first();
        return view ('free-text-message-detail',['data'=>$data,'user'=>$user]);
    }
}
