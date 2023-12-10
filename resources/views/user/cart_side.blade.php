<?php
                                            $totalitem = 0;
                                            $total_cart_price = 0;
                                            ?>
                                        @foreach ($carts as $cart)
                                                <?php
                                                $totalitem =$totalitem +  $cart->quantity;
                                                $total_cart_price = $total_cart_price + $cart->total_price;
                                                ?>
                                        @endforeach
                                        <?php
                                        $totalitem = 0;
                                        ?>
                                    @foreach ($carts as $cart)
                                            <?php
                                            $totalitem =$totalitem +  $cart->quantity;
                                            ?>
                                    @endforeach
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasRight"
aria-labelledby="offcanvasRightLabel">
<div class="offcanvas-header bg-section-2">
  <h6 class="mb-0 fw-bold" id="offcanvasRightLabel">{{$totalitem}} items in the cart</h6>
  <h6 class="mb-0 fw-bold" id="offcanvasRightLabel">Subtotal: {{ $total_cart_price}} </h6>
  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
  <div class="cart-list">
@foreach ( $carts as  $cart)
    

    <div class="d-flex align-items-center gap-3">
      <div class="bottom-product-img">
        <a href="">
          <img src="{{ asset('/image/' . $cart->image) }}" width="60" alt="">
        </a>
      </div>
      <div class="">
        <h6 class="mb-0 fw-light mb-1">{{  $cart->product_name}}</h6>
        <p class="mb-0"><strong>{{ $cart->quantity }} X &#2547;{{ $cart->price }}</strong>
        </p>
        <p class="mb-0"><strong>Size: {{ $cart->size }}  </strong>
        </p>
      </div>
      <div class="ms-auto fs-5">
        <a href="{{url('/delete_cart/'.$cart->id)}}" onclick=" confirmation(event)" class="link-dark"><i class="bi bi-trash"></i></a>
      </div>
    </div>
   
   
    <hr>
    @endforeach

  </div>
</div>
<div class="offcanvas-footer p-3 border-top">
  <div class="d-grid">
    <button type="button" class="btn btn-lg btn-dark btn-ecomm px-5 py-3">Checkout</button>
    <a href="{{ url('/view-cart') }}" style="margin-top: 10px; background-color:rgb(37, 124, 238);color:white;" type="button" class="btn btn-lg btn btn-ecomm px-5 py-3">View Cart</a>
  </div>
</div>

</div>