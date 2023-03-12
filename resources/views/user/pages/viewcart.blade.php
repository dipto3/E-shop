@extends('user.master')

@section('content')

<div class="container bootdey">
    <div class="row bootstrap snippets">
        
        <div class="clearfix visible-sm"></div>
    
        <!-- Cart -->
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="col-lg-12 col-sm-12">
                <span class="title">SHOPPING CART</span>
            </div>
            <div class="col-lg-12 col-sm-12 hero-feature">
                <div class="table-responsive">
                    <table class="table table-bordered tbl-cart">
                        <thead>
                            <tr>
                                <td class="hidden-xs">Image</td>
                                <td>Product Name</td>
                                <td>Size</td>
                                <td>Color</td>
                                <td class="td-qty">Quantity</td>
                                <td>Unit Price</td>
                                <td>Sub Total</td>
                                <td>Remove</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
<form action="{{url('/qty-chng/'.$cart->id)}}" method="POST" enctype="multipart/form-data">
    @csrf 


                            <tr>
                                <td class="hidden-xs">
                                    <a href="#">
                                      
                                        <img src="{{asset('/image'.$cart->image)}}">
                                       
                                    </a>
                                </td>
                                <td><a href="#">{{$cart->product_name}}</a>
                                </td>
                                <td>
                                 
                                        <a href="">{{$cart->size}}</a>
                                     
                                
                                </td>
                                <td>
                                 
                                    <a href="">{{$cart->color}}</a>
                                 
                            
                            </td>
                                <td>
                                    
                                <input style="width: 120px;" name="qty" value="{{$cart->qty}}" type="number">
                                </td>
                                <td class="price">$ {{$cart->price}}</td>
                                <td>$ {{$cart->total_price}}</td>
                                <td class="text-center">
                                    <a href="{{url('/remove-cart/'.$cart->id)}}" onclick="return confirm('Are you sure to remove product?')" class="remove_cart" rel="1">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>

                            @endforeach

                            <?php $totalitem = 0;
                        $total_cart_price = 0;
                        ?>
                        @foreach ($carts as $cart)
                        <?php $totalitem =$totalitem +  $cart->qty;
                        $total_cart_price = $total_cart_price + $cart->total_price;
                        ?>
                        @endforeach
                            <tr>
                                <td colspan="6" align="right">Subtotal</td>
                                <td class="total" colspan="2"><b>${{$total_cart_price}} </b>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="btn-group btns-cart">
                    <a href="{{url('/allproducts')}}"  class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Continue Shopping</a>
                    <button type="submit" style="background-color: rgb(51, 160, 66); color:white;" class="btn ">Update Cart</button>
                    <a href="{{url('/shipping-address')}}" style="background-color: rgb(218, 84, 84); color:bisque;"class="btn ">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </form>
            </div>
        </div>
        <!-- End Cart -->
    </div>
    </div>

@endsection