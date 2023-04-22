<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Banner;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function redirect(){
        $categories = Category::all();
        $products = Product::where('status',1)->get();
        $totalproducts = Product::where('status',1)->count();
        $totalusers = User::where('usertype',0)->count();
        $deactiveproducts = Product::where('status',0)->count();
        $userid = Auth::user()->id;
        $carts = Cart::where('user_id','=',$userid)->get();
        // $cart = Product::findOrFail($id);
        if(Auth::id()){
            if(Auth::user()->usertype == '0')
            {
                return view('user.home',compact('categories','products','carts'));
            }
            else{
                return view('admin.home',compact('totalproducts','totalusers','deactiveproducts'));
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function index(){
        $banners = Banner::all();

        $categories = Category::all();
    if(Auth::user()){
        $user_id = Auth::user()->id;
        $carts = Cart::where('user_id', $user_id )->get();
    }else{
        $users_id = Auth::user();
        $carts = Cart::where('user_id', $users_id )->get();
    }
        
        $products = Product::where('status',1)->get();
        return view('user.home',compact('categories','products','carts','banners'));
    }
    public function profile(){
        $categories = Category::all();
        $useid = Auth::user()->id;
        $carts = Cart::where('user_id','=',$useid)->get();
        // $cart = Product::findOrFail($id);
        return view('user.profile',compact('categories','carts'));
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
