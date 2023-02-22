<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ContactController extends Controller
{
    public function contact(){
        $categories = Category::all();
        return view('user.pages.contactus',compact('categories'));
    }
}
