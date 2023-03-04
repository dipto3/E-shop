@extends('admin.master')

@section('content')
<div class="table-responsive pt-3">
    <table class="table table-hover table-dark">
        <thead>
            <tr>
              <th style="width: 3%;" scope="col">Order ID</th>
              <th style="width: 6%;"scope="col">Reciver name</th>
              <th style="width: 5%;"scope="col">Phone</th>
              <th style="width: 10%;"scope="col">Address</th>
              <th style="width: 5%;"scope="col">Email</th>
              <th style="width: 5%;"scope="col">Zip Code</th>
              <th style="width: 7%;"scope="col">Product name</th>
              <th style="width: 5%;"scope="col">Qty</th>
              <th style="width: 5%;"scope="col">Size</th>
              <th style="width: 5%;"scope="col">Color</th>
              <th style="width: 5%;"scope="col">Total Price</th>
              <th style="width: 15%;"scope="col">Image</th>
              <th style="width: 8%;"scope="col">Delivery Status</th>
              <th style="width: 8%;"scope="col">Payment Status</th>
              <th style="width: 7%;"scope="col">Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($orders as $order)
            @php 
                $order['image'] = explode('|',$order->image);
                $images = $order->image[0];
            @endphp
          
            <tr>
                <th scope="row">{{ $order->id }}</th>
                <td>{{ $order->name }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->zip_code }}</td>
                <td>{{ $order->product_name }}</td>
                <td>{{ $order->qty }}</td>
                <td>{{ $order->size }}</td>
                <td>{{ $order->color }}</td>
                <td>{{ $order->total_price }}</td>
                <td>  <img src="{{asset('/image/'.$images)}}" style="width:50px; height:50px;"></td>
                <td>{{ $order->delivery_status }}</td>
                <td>{{ $order->payment_status }}</td>
                <td>
                  @if ($order->delivery_status == 'processing')
                  <a href="{{url('/order-update/'.$order->id)}}" onclick="return confirm('Are you sure this product is delivered?')" class="btn btn-success">Deliverd</a>
                  @else
                  <h6>Already Delivered</h6>
                  @endif
                  
                </td>
            </tr>
            @endforeach
          </tbody>

    </table>
</div>
@endsection