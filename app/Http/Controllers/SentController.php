<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use DataTables;

class SentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function messageSent(Request $request)
    {
        $data = DB::table('messages')
            ->join('aftn_header','aftn_header.message_id','=','messages.id')
            ->where('messages.user_id',Auth::user()->id)
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
        return view('message-sent');
    }

}
