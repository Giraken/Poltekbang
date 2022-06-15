<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use DataTables;
use PDF;

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
        $address = Auth::user()->name;
        $data = DB::table('messages')
        ->join('aftn_header','aftn_header.message_id','=','messages.id')
        ->where(function ($query) use ($address) {
            for ($i=1;$i<=28;$i++)
            {
                $query->orWhere('address'.$i,$address);
            }
        })
        ->get();

        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn =
                        '<button type="button" class="btn btn-danger text-white"><i class="bi bi-file-earmark-pdf"></i></button>
                        <button type="button" class="btn btn-secondary text-white"><i class="bi bi-search"></i></button>
                        <button type="button" class="btn btn-primary text-white"><i class="bi bi-pen"></i></button>';
                    // $actionBtn2 = '<button data-bs-toggle="modal" data-bs-target="#message-box" type="button" class="btn btn-danger text-white"><i class="bi bi-file-earmark-pdf"></i></button>';
                    // $actionBtn = [$actionBtn1, $actionBtn2];
                    return $actionBtn;
                })
                ->rawColumns(['action'])->make(true);
    }
    public function downloadPDF()
    {
        $path = base_path('public/img/unnamed.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        // $pdf = PDF::loadView('pdf')->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('pdf',compact('pic'))->setOptions(['defaultFont' => 'sans-serif']);
        //dump($pdf);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('invoice.pdf');
    }
}
