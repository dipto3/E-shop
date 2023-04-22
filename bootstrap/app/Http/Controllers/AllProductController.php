<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use App\Models\Color;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
class AllProductController extends Controller
{
    public function productbycat($name){
        if(Auth::user()){
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id )->get();
        }else{
            $users_id = Auth::user();
            $carts = Cart::where('user_id', $users_id )->get();
        }
        $categories = Category::all();
        // $products = Product::where('status',1)->where('category',$id)->limit(10)->get();

$products = Product::where('category',$name)->where('status',1)->get();
// dd($carts );
        return view('user.pages.product_by_cat',compact('categories','products','carts'));
    }
    public function allproducts(){
        $categories = Category::all();
        if(Auth::user()){
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id )->get();
        }else{
            $users_id = Auth::user();
            $carts = Cart::where('user_id', $users_id )->get();
        }
        $products = Product::where('status',1)->get();
        return view('user.pages.products',compact('categories','products','carts'));
    }

    public function viewdetails($id){
        $categories = Category::all();
        $products = Product::findOrFail($id);
        $sizes = Size::find($products->size);
        $colors = Color::find($products->color);
        if(Auth::user()){
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id )->get();
        }else{
            $users_id = Auth::user();
            $carts = Cart::where('user_id', $users_id )->get();
        }
        return view('user.pages.viewdetails',compact('categories','products','sizes','colors','carts'));
    }
}
