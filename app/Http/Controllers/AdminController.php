<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{  
   public function invoice(){
   	return view('admin.invoice');
   }
   public function inputpo(){
   	return view('admin.inputpo');
   }
   public function profile(){
   	return view('admin.profile');
   }
   public function dataPO(){
      return view('admin.dataPO');
   }
   public function pembayaran(){
      return view('admin.pembayaran');
   }
   public function inputsupplier(){
      return view('admin.inputsupplier');
   }
   public function inputinvoice(){
      return view('admin.inputinvoice');
   }
   public function inputpembayaran(){
      return view('admin.inputpembayaran');
   }
   public function inputbarang(){
      return view('admin.inputbarang');
   }
   public function __construct()
   {
      $this->middleware('auth');
   }
}