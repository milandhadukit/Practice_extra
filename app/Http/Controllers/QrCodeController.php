<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ckeck;
use PDF;

class QrCodeController extends Controller
{
    //
    public function index()
    {
      return view('qrcode');
    }

    public function barCode()
    {
      return view('product');
    }

    public function newBarCode()
    {
      
      $a=Ckeck::select('id','number','name')->get();
      return view('barcode',compact('a'));
      
    }
    
    public function generatePDF()
    {
       
        $a=Ckeck::select('id','number','name')->get();
        $pdf = PDF::loadView('barcode',compact('a'));  //barcode= view file name
        return $pdf->download('qr-code.pdf');
    }




}
