<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class AboutController extends Controller
{
   public function about(){
    $categories = Category::all();
 
    if(Auth::user()){
      $user_id = Auth::user()->id;
      $carts = Cart::where('user_id', $user_id )->get();
  }else{
      $users_id = Auth::user();
      $carts = Cart::where('user_id', $users_id )->get();
  }
    return view('user.pages.about',compact('categories','carts'));
   }
}
