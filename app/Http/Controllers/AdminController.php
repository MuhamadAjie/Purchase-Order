<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{  
   public function charts(){
   	return view('admin.charts');
   }
   
    public function flot(){
   	return view('admin.flot');
   }
    public function invoice(){
   	return view('admin.invoice');
   }
    public function calendar(){
   	return view('admin.calendar');
   }
    public function inputpo(){
   	return view('admin.inputpo');
   }
    public function profile(){
   	return view('admin.profile');
   }
   public function fixed(){
    return view('admin.fixed');

   }
   public function boxed(){
    return view('admin.boxed');
   }
   public function dataPO(){
    return view('admin.dataPO');
   }

   public function pemba(){
    return view('admin.pemba');
   }

   public function inputsupplier(){
    return view('admin.inputsupplier');
   }

   public function inputinvoice(){
    return view('admin.inputinvoice');
   }
   public function inputpemba(){
    return view('admin.inputpemba');
   }
   public function inputbarang(){
    return view('admin.inputbarang');
   }
   
   public function __construct()
   {
      $this->middleware('auth');
   }
}
