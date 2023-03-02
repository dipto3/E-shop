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
        $users = Auth::user();
        if(Auth::user()){
          $user_id = Auth::user()->id;
          $carts = Cart::where('user_id', $user_id )->get();
      }else{
          $users_id = Auth::user();
          $carts = Cart::where('user_id', $users_id )->get();
      }
        return view('user.pages.oder',compact('categories','carts','user_id','users'));

    }

    public function cod_order($id){
        $user = Auth::user();
        $userid = $user->id;
        // $dataa = Shipdetails::find($id);
       
        
    //  $sdata = DB::table('shipdetails')
    //             ->join('carts','shipdetails.rcv_uid','=','carts.user_id')
    //             ->select('rcv_name','zip_code')
    //             ->get();

 
    $sdata = Shipdetails::where('rcv_uid',$userid)->first();
    // dd($sdata);
        $udata = Cart::where('user_id',$userid)->get();
       
    // dd($sdata);

    foreach($udata as $data){
        $order = new Order;
        $order->name = $sdata->rcv_name;
        $order->email = $sdata->rcv_email;
        $order->phone = $sdata->rcv_phone;
        $order->zip_code = $sdata->zip_code;
        $order->address = $sdata->rcv_add;
        $order->city = $sdata->rcv_city;
        $order->district = $sdata->rcv_district;
        $order->user_id = $sdata->rcv_uid;
        $order->product_name = $data->product_name;
        $order->product_id = $data->product_id;
        $order->qty = $data->qty;
        $order->size = $data->size;
        $order->color = $data->color;
        $order->total_price = $data->total_price;
        $order->image = $data->image;
        $order->payment_status = 
        $order->delivery_status =
        $order->save();

        $cart_id = $data->id;
        $cartdlt = Cart::find( $cart_id );
        $cartdlt->delete();

        
        
   
       
    }
   return redirect()->back();
   


    }
   

    }



