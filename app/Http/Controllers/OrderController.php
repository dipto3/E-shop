<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Shipdetails;
use DB;

use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order_form(){
        $categories = Category::all();
 
        if(Auth::user()){
          $user_id = Auth::user()->id;
          $carts = Cart::where('user_id', $user_id )->get();
      }else{
          $users_id = Auth::user();
          $carts = Cart::where('user_id', $users_id )->get();
      }
        return view('user.pages.oder',compact('categories','carts'));

    }

    public function cod_order(){
        $user = Auth::user();
     
        $userid = $user->id;
    //  $sdata = DB::table('shipdetails')
    //             ->join('carts','shipdetails.rcv_uid','=','carts.user_id')
    //             ->select('rcv_name','zip_code')
    //             ->get();
             
            //    dd($sdata);
        $sdata = Shipdetails::where('rcv_uid',$userid)->get();
        $udata = Cart::where('user_id',$userid)->get();
       
       dd($sdata);

    foreach($udata as $data ){
        $order = new Order;
        $order->name = $data->name;
        $order->Zip_code = $sdata->zip_code;
        $order->save();
    }
  
   


    }
   

    }



