@extends('user.layouts.master')
@section('user.content')

<div class="page-content">
    <div class="container" style="margin-top: 30px; ">
    <div class=" col-md-6" style="margin:auto;">
        <div class="card rounded-0 mb-3">
      <div class="card-body">
        <h5 class="fw-bold mb-4">Order Summary</h5>
        <div class="">
            <div class="">
                <?php
                $total_cart_price = 0;
               $totalitem = 0;
               ?>
               @foreach ($carts as $cart)
               <?php

                $total_cart_price = $total_cart_price + $cart->total_price;
                ?>
                <p class="">{{$cart->product_name}} X {{$cart->quantity}} ({{$cart->color}} - {{$cart->size}} ) - &#2547;{{$cart->total_price}}</p>

                @endforeach
                <hr>
                <p class="">Delivery - 29</p>
              </div>
       {{-- <div class="hstack align-items-center justify-content-between">
         <p class="mb-0">Delivery</p>
         <p class="mb-0">Free</p>
       </div> --}}
       <hr>
       <div class="hstack align-items-center justify-content-between fw-bold text-content">
         <p class="mb-0">Total Amount </p>
         <p class="mb-0">&#2547;{{$total_cart_price + 29}}</p>
       </div>
      </div>
    </div>

    </div>
    <div class="offcanvas-footer p-3 border-top">
        <div class="d-grid">
          <a href="{{route('cod.order')}}"  class="btn btn-lg btn-dark btn-ecomm px-5 py-3">Checkout</a>
        </div>
      </div>
</div>
</div>
@endsection
