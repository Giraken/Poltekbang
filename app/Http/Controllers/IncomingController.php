<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use DataTables;

class IncomingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function incomingMessage(Request $request)
    {
        return view('incoming-message');
    }

    public function incomingMessageApi()
    {
        $data = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->get();

        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<button data-bs-toggle="modal" data-bs-target="#message-box" type="button" class="btn btn-danger text-white"><i class="bi bi-file-earmark-pdf"></i></button><button data-bs-toggle="modal" data-bs-target="#message-box" type="button" class="btn btn-secondary text-white"><i class="bi bi-search"></i></button>';
                    // $actionBtn2 = '<button data-bs-toggle="modal" data-bs-target="#message-box" type="button" class="btn btn-danger text-white"><i class="bi bi-file-earmark-pdf"></i></button>';
                    // $actionBtn = [$actionBtn1, $actionBtn2];
                    return $actionBtn;
                })
                ->rawColumns(['action'])->make(true);
    }
}
