<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SizeController extends Controller
{
   public function create(){
    return view('admin.size.create');
   }
   public function index(){
    return view('admin.size.index');
   }
}
