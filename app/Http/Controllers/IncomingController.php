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
        })->select('*','messages.id as id')
        ->get();

        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    
                    if($data->type == "FPL"){
                        $actionBtn = '<a href="fpl-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                        $actionBtn .= '<a href="/downloadPDF/'.$data->id.'" class="btn btn-danger text-white"><i class="bi bi-file-earmark-pdf"></i></a>';
                        $actionBtn .= '<a href="/filed-message/edit/'.$data->id.'" class="btn btn-primary text-white"><i class="bi bi-pen"></i></a>';
                    }
                    elseif($data->type =="CHG"){
                        $actionBtn = '<a href="/chg-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                    }
                    elseif($data->type =="DEP"){
                        $actionBtn = '<a href="/dep-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                    }
                    elseif($data->type =="DLA"){
                        $actionBtn = '<a href="/dla-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                    }
                    elseif($data->type =="CNL"){
                        $actionBtn = '<a href="/cnl-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                    }
                    elseif($data->type =="ARR"){
                        $actionBtn = '<a href="/arr-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                    }
                    elseif($data->type =="FREETEXT"){
                        $actionBtn = '<a href="/freetext-message-detail/'.$data->id.'" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                    }
                    else {
                        $actionBtn = '<a type="button" class="btn btn-secondary text-white"><i class="bi bi-search"></i></a>';
                    }
                    return $actionBtn;
                })
                ->rawColumns(['action'])->make(true);
    }

    public function detailMessage($id)
    {
        $idMessage = $id;
    }

    public function pdf($id)
    {
        $path = base_path('public/img/unnamed.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $message = DB::table('messages')->where('id',$id)->first();
        $aftn = DB::table('aftn_header')->where('message_id',$id)->first();
        $add = DB::table('additional_informations')->where('message_id',$id)->first();
        // ->join('aftn_header','aftn_header.message_id','=','messages.id')
        // ->leftJoin('additional_informations','additional_informations.message_id','=','messages.id')
        // ->where('messages.id',$id)->get();
        return view('pdf',compact('pic','message','aftn','add'));
    }
    public function downloadPDF($id)
    {
        $path = base_path('public/img/unnamed.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $message = DB::table('messages')->where('id',$id)->first();
        $aftn = DB::table('aftn_header')->where('message_id',$id)->first();
        $add = DB::table('additional_informations')->where('message_id',$id)->first();
        // $pdf = PDF::loadView('pdf')->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('pdf',compact('pic','message','aftn','add'))->setOptions(['defaultFont' => 'sans-serif']);
        //dump($pdf);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('invoice.pdf');
    }

    // Sementara
    public function downloadDLAPDF()
    {
        $path = base_path('public/img/unnamed.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        // $pdf = PDF::loadView('pdf')->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('pdf-dla', compact('pic'))->setOptions(['defaultFont' => 'sans-serif']);
        //dump($pdf);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('invoice.pdf');
    }

    public function downloadCHGPDF()
    {
        $path = base_path('public/img/unnamed.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        // $pdf = PDF::loadView('pdf')->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('pdf-chg', compact('pic'))->setOptions(['defaultFont' => 'sans-serif']);
        //dump($pdf);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('invoice.pdf');
    }

    public function downloadCNLPDF()
    {
        $path = base_path('public/img/unnamed.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        // $pdf = PDF::loadView('pdf')->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('pdf-cnl', compact('pic'))->setOptions(['defaultFont' => 'sans-serif']);
        //dump($pdf);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('invoice.pdf');
    }

    public function downloadDEPPDF()
    {
        $path = base_path('public/img/unnamed.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        // $pdf = PDF::loadView('pdf')->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('pdf-dep', compact('pic'))->setOptions(['defaultFont' => 'sans-serif']);
        //dump($pdf);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('invoice.pdf');
    }

    public function downloadARRPDF()
    {
        $path = base_path('public/img/unnamed.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        // $pdf = PDF::loadView('pdf')->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('pdf-arr', compact('pic'))->setOptions(['defaultFont' => 'sans-serif']);
        //dump($pdf);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('invoice.pdf');
    }

    public function downloadFreeTextPDF()
    {
        $path = base_path('public/img/unnamed.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        // $pdf = PDF::loadView('pdf')->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('pdf-freetext', compact('pic'))->setOptions(['defaultFont' => 'sans-serif']);
        //dump($pdf);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('invoice.pdf');
    }
}
