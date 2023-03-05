@extends('user.master')

@section('content')
<div class="container">
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Order id</th>
        <th scope="col">Product name</th>
        <th scope="col">Size</th>
        <th scope="col">Color</th>
        <th scope="col">Qty</th>
        <th scope="col">Total Price</th>
        <th scope="col">Delivery Status</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    
      </tr>
    </thead>
    <tbody>
        @foreach ($orderlists  as $orderlist)
        @php 
        $orderlist['image'] = explode('|',$orderlist->image);
        $images = $orderlist->image[0];
        @endphp
      
      <tr>
        <th scope="row">{{$orderlist->id}}</th>
        <td>{{$orderlist->product_name}}</td>
        <td>{{$orderlist->size}}</td>
        <td>{{$orderlist->color}}</td>
        <td>{{$orderlist->qty}}</td>
        <td>{{$orderlist->total_price}}</td>
        <td>{{$orderlist->delivery_status}}</td>
        <td>
            <img src="{{asset('/image/'.$images)}}" style="width:100px; height:100px;">
        </td>
        <td>
            @if($orderlist->delivery_status == 'processing')
            <a href="{{url('/order-delete/'.$orderlist->id)}}" onclick="return confirm('Are you sure to this cancel the order?')" class="btn btn-danger">Cancel Order</a>
            @else
            <h5>Nothing to action</h5>
            @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection