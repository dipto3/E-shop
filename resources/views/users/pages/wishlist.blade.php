@extends('user.master')

@section('user.content')
    @include('user.nav')
    <div class="container">
    <div class="col-md-3" style=" height:auto; margin-top: 50px;">
        <div class="" style=" border: 1px red;">
            <h5>Hey, {{Auth::user()->name}}</h5>
            <div style="" class="btn-group-vertical pf">
            <a style=" " href="{{url('/billing-address')}}" class="btn"> Billing Address <img style="width: 20px;"  src="./img/home-address.png" alt=""></a>
            <a style="  " href="{{url('/view-cart')}}" class="btn">Your Cart <img style="width: 20px;"  src="./img/shopping-cart.png" alt=""></a>
            <a style=" " href="" class=" btn ">Your Wishlist <img style="width: 20px;"  src="./img/wishlist.png" alt=""></a>
            <a style=" " href="{{url('/all-orders')}}" class=" btn ">Your Order <img style="width: 20px;"  src="./img/shopping-bag.png" alt=""></a>
            </div>

        </div>
    </div>
    <div class="col-md-9" >


<h4 style="margin-top: 10px;">{{Auth::user()->name}} Your Cart Item  </h4>
    <table style="margin-top: 5%;" class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Discount price</th>

          </tr>
        </thead>
        <tbody>


@foreach ($wishlistData as $data)


          <tr>
            <th scope="row">   <a href="{{ url('/product-details/' . $data->product_id) }}">{{ $data->product->name }}</a>
             <br>

                <span style="font-size: 13px;">Color: {{ $data->product->color }}</span>

            </th>
            <td><img name="image" style="height: auto; width: 70px"
                src="{{ asset('/image/' . $data->product->image) }}"></td>
            <td>{{ $data->product->price }}</td>
            <td>

                @if($data->product->discount_price != null)
                    {{$data->product->discount_price}}

                @else
                    <p>
                        0

                    </p>

                @endif

            </td>

          </tr>

          @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
<style>
    .pf  a {
    box-shadow: inset 0 0 0 0 #f75c76;
    color: Black;

    padding: 0 .15rem;
    transition: color .10s ease-in-out, box-shadow .3s ease-in-out;
    margin-top: 10px;
    padding: 10px;
    width: 100%;
  }
  .pf  a:hover {
    box-shadow: inset 200px 0 0 0 #f75c76;
    color: white;
  }

  </style>
