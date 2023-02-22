<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AboutController extends Controller
{
   public function about(){
    $categories = Category::all();
    return view('user.pages.about',compact('categories'));
   }
}
