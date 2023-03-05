<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

use Brian2694\Toastr\Facades\Toastr;

class AllorderController extends Controller
{
    public function show_order(){


        $orders = Order::all();
        return view('admin.orders.allorder',compact('orders'));
    }
    public function update($id){

    $order = Order::find($id);
    $order-> delivery_status  = 'Delivered';
    $order->save();

     return redirect()->back();
    }
    public function cancel($id){
        $order = Order::find($id);
    $order-> delivery_status  = 'Cancel By Admin';
    $order->save();

     return redirect()->back();

    }
}