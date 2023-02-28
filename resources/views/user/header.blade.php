
{{-- <style>
   li.nav-itemcart ul{
      width:300px;
      height: 400px;
      overflow: scroll;

   }
   .product-name{
      font-size: 18px;
   }
   .product-price{
      font-size: 18px;
   }
   .product-widget{
      width:100px;
      height: 200px;
   }
   .product-widget .delete {
    margin-left: 10px;
margin-top: 10px;
position: absolute;
    height: 14px;
    width: 14px;
    text-align: center;
    font-size: 10px;
    padding: 0;
    background: #1e1f29;
    border: none;
    color: #FFF;
}
 
  
</style> --}}
<style>

.cart-dropdown {

  width: 300px;
  height: 339px;
  background: #FFF;
  padding: 15px;
  -webkit-box-shadow: 0px 0px 0px 2px #E4E7ED;
  box-shadow: 5px 2px 10px 10px #dc3545;
 

  
}

.dropdown.open>.cart-dropdown {
  opacity: 1;
  visibility: visible;
}

.cart-dropdown .cart-list {
  max-height: 180px;
  overflow: auto;
  margin-bottom: 15px;
}

.cart-dropdown .cart-list .product-widget {
  padding: 0px;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.cart-dropdown .cart-list .product-widget:last-child {
  margin-bottom: 0px;
}

.cart-dropdown .cart-list .product-widget .product-img {
  left: 0px;
  top: 0px;
}

.cart-dropdown .cart-list .product-widget .product-body .product-price {
  color: #2B2D42;
}

.cart-dropdown .cart-btns {
  margin: 0px -17px -17px;
}

.cart-dropdown .cart-btns>a {
 
  width: calc(50% - 0px);
  padding: 12px;
  background-color: #D10024;
  color: #FFF;
  text-align: center;
  font-weight: 700;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.cart-dropdown .cart-btns>a:first-child {
  margin-right: -4px;
  background-color: #1e1f29;
}

.cart-dropdown .cart-btns>a:hover {
  opacity: 0.9;
}

.cart-dropdown .cart-summary {
  border-top: 1px solid #E4E7ED;
  padding-top: 15px;
  padding-bottom: 15px;


}
.product-imgg{
   width: 50px;
}
.product-namee,.product-pricee{
   font-size: 15px;
}
div.product-body{

   display: block;
}




</style>
<header class="header_section">
   
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{'/'}}"><img width="250" src="{{asset('frontend/images/logo.png')}}" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="{{'/'}}">Home <span class="sr-only">(current)</span></a>
                </li>
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Categories <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                     @foreach ($categories as $category )
                     <li><a href="{{url('/productbycat/'.$category->name)}}">{{$category->name}}</a></li>
                     @endforeach
                     
                  
                   </ul>
                </li>
               
                <li class="nav-item">
                   <a class="nav-link" href="{{url('/allproducts')}}">Product</a>
                </li> 
                <li class="nav-item">
                   <a class="nav-link" href="{{url('/about')}}">About</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{url('/contact-us')}}">Contact us</a>
                </li>

                @if (Route::has('login'))
                   @auth

                <li class="nav-itemcart dropdowns">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" href=""><i class="fa-solid fa-cart-shopping"></i></a>
                  <ul class="dropdown-menu">
                     <div class="cart-dropdown">
                        <h2  style="font-size:14px; margin-left:4%;  Color:rgb(15, 2, 2);font-family: open sans;"><i class="fa-solid fa-cart-shopping"></i>  YOUR CART LIST</h2>
                     
                      
                        <div class="cart-list">
                          
                             
                          {{-- @if ($carts['product_id'] != $carts['product_id']) --}}
                             
                          
                           @foreach ($carts as $cart)
                         <div style="border: 1px solid rgb(236, 236, 236);">
                           <div  class="product-widget form-row">
                              <div class="product-imgg col">
                                 <img src="./img/product01.png" alt="">
                              </div>
                              <div style="margin-top: 5%;" class="product-body col">
                                 <h3 class="product-namee"><a href="#">{{$cart->product_name}}</a></h3>
                                 <h4 class="product-pricee"><span class="qty">{{$cart->qty}}x</span>${{$cart->price}}</h4>
                                 <br>
                                 <h4 class="product-pricee"><span class="qty">{{$cart->size}} -- </span>{{$cart->color}}</h4>
                              </div>
                              <form action="{{url('/remove-cart/'.$cart->id)}}" method="post">
                                 @csrf
                                 <button type="submit" onclick="return confirm('Are you sure to remove product?')" style="height:5%; margin-right: 10px;  border-style: none;"  class="delete"><i  class="fa fa-close"></i></button>
                              </form>
                              
                           </div>
                           
                        </div>
                         
                           @endforeach
                           {{-- @endif --}}
                           
                        </div>
                        <?php $totalitem = 0;
                        $total_cart_price = 0;
                        ?>
                        @foreach ($carts as $cart)
                        <?php $totalitem =$totalitem +  $cart->qty;
                        $total_cart_price = $total_cart_price + $cart->total_price;
                        ?>
                        @endforeach
                        <div class="cart-summary">
                           <small > {{$totalitem}} Item(s) selected</small>
                           <h5>SUBTOTAL: ${{ $total_cart_price}}</h5>
                        </div>
                      
                        <div class="cart-btns">
                           <a href="">View Cart</a>
                           <a href="{{url('/shipping-address')}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                     </div>
                  </ul>
               </li>
                
           


                   {{-- <form method="POST" action="{{ route('logout') }}">
                      @csrf
  
                      <li class="nav-item">
                         <a class="nav-link" href="{{ route('logout') }}"
                         @click.prevent="$root.submit();">Logout</a>
                      </li>
                  </form> --}}
                  <x-app-layout>

                  </x-app-layout>
                  {{-- <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label"> {{ Auth::user()->name }} <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="{{route('user.logout')}}">Log Out</a></li>
                        <li><a href="{{route('profile')}}">Profile</a></li>
                     </ul>
                  </li> --}}
                  
                 

                @else
                <li class="nav-item">
                   <a class="nav-link" href="{{ route('login') }}">Login</a>


                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>


                 </li>
                 @endauth
                 @endif
              
               
               
             </ul>
          </div>
       </nav>
    </div>
 </header>