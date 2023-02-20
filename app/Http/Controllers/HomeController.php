<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function redirect(){
        $categories = Category::all();
        if(Auth::id()){
            if(Auth::user()->usertype == '0')
            {
                return view('user.home',compact('categories'));
            }
            else{
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function index(){
        $categories = Category::all();
        $products = Product::where('status',1)->get();
        return view('user.home',compact('categories','products'));
    }
    public function profile(){
        $categories = Category::all();
        return view('user.profile',compact('categories'));
    }

    public function admin_logout(){
        Auth::logout();
        return Redirect()->route('home');
    }
    public function user_logout(){
        Auth::logout();
        return Redirect()->route('home');
    }
}
