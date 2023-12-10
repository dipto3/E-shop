@extends('user.master')
@section('user.content')
    <div class="page-content">
        <?php
        $totalitem = 0;
        ?>
        @foreach ($carts as $cart)
            <?php
            $totalitem = $totalitem + $cart->quantity;
            ?>
        @endforeach

        <!--start product details-->
        <section class="section-padding">
            <div class="container">
                <div class="d-flex align-items-center px-3 py-2 border mb-4">
                    <div class="text-start">
                        <h4 class="mb-0 h4 fw-bold">My Bag ({{ $totalitem }} items)</h4>
                    </div>
                    <div class="ms-auto">
                        <button type="button" class="btn btn-light btn-ecomm">Continue Shopping</button>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-12 col-xl-8">
                        @foreach ($wishlistData as $data)
                            <div class="card rounded-0 mb-3">
                                <div class="card-body">
                                    <div class="d-flex flex-column flex-lg-row gap-3">
                                        <div class="product-img">
                                            <img src="" width="150" alt="">
                                        </div>
                                        <div class="product-info flex-grow-1">
                                            {{--  <h5 class="fw-bold mb-0">{{ $data->product->name }}</h5>
                                            <div class="product-price d-flex align-items-center gap-2 mt-3">
                                                @if ($data->product->discount_price)
                                                    <div class="h6 fw-bold">&#2547;{{ $data->product->discount_price }}
                                                    </div>
                                                    <div class="h6 fw-light text-muted text-decoration-line-through">
                                                        &#2547;{{ $data->product->price }}</div>
                                                @else
                                                    <div class="h6 fw-bold">&#2547;{{ $data->product->price }}</div>
                                                @endif
                                                <div class="h6 fw-bold text-danger">(70% off)</div>
                                            </div>  --}}
                                            <div class="mt-3 hstack gap-2">
                                                <img src="assets/images/product-images/03.jpg" class="img-fluid"
                                                    style="height: 100px; width:100px;" alt="">
                                                <h5 class="fw-bold mb-0">{{ $data->product->name }} ,<br></h5><br>
                                                <h5 class="fw-bold mb-0"><b>Category: </b>{{ $data->product->category }}</h5>
                                            </div>
                                            <div class="mt-3 hstack gap-2">

                                                @if ($data->product->discount_price)
                                                    <div class="h6 fw-bold">&#2547;{{ $data->product->discount_price }}
                                                    </div>
                                                    <div class="h6 fw-light text-muted text-decoration-line-through">
                                                        &#2547;{{ $data->product->price }}</div>
                                                @else
                                                    <div class="h6 fw-bold">&#2547;{{ $data->product->price }}</div>
                                                @endif
                                                <div class="h6 fw-bold text-danger">(70% off)</div>
                                            </div>
                                            {{--  <div class="mt-3 hstack gap-2">

                                                <button type="button" class="btn btn-sm btn-light border rounded-0"
                                                    data-bs-toggle="modal" data-bs-target="#SizeModal">Color :
                                                    {{ $cart->color }}</button>
                                                <button type="button" class="btn btn-sm btn-light border rounded-0"
                                                    data-bs-toggle="modal" data-bs-target="#SizeModal">Size :
                                                    {{ $cart->size }}</button>
                                                <button type="button" class="btn btn-sm btn-light border rounded-0"
                                                    data-bs-toggle="modal" data-bs-target="#QtyModal">Qty :
                                                    {{ $cart->quantity }}</button>
                                            </div>  --}}
                                        </div>
                                        <div class="d-none d-lg-block vr"></div>
                                        <div class="d-grid gap-2 align-self-start align-self-lg-center">
                                            <a href="{{ url('/delete-wishlist/' . $data->id) }}" onclick=" confirmation(event)"
                                                class="btn btn-ecomm"><i class="bi bi-x-lg me-2"></i>Remove</a>
                                            {{-- <button type="button" class="btn dark btn-ecomm"><i class="bi bi-suit-heart me-2"></i>Move to Wishlist</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    {{--  <div class="col-12 col-xl-4">
                        <div class="card rounded-0 mb-3">
                            <div class="card-body">
                                <h5 class="fw-bold mb-4">Order Summary</h5>
                                <div class="hstack align-items-center justify-content-between">
                                    <p class="mb-0">Bag Total</p>
                                    <p class="mb-0">$599.00</p>
                                </div>
                                <hr>
                                <div class="hstack align-items-center justify-content-between">
                                    <p class="mb-0">Bag discount</p>
                                    <p class="mb-0 text-success">- $178.00</p>
                                </div>
                                <hr>
                                <div class="hstack align-items-center justify-content-between">
                                    <p class="mb-0">Delivery</p>
                                    <p class="mb-0">$29.00</p>
                                </div>
                                <hr>
                                <div class="hstack align-items-center justify-content-between fw-bold text-content">
                                    <p class="mb-0">Total Amount</p>
                                    <p class="mb-0">$393.00</p>
                                </div>
                                <div class="d-grid mt-4">
                                    <button type="button" class="btn btn-dark btn-ecomm py-3 px-5">Place Order</button>
                                </div>
                            </div>
                        </div>  --}}
                        {{-- <div class="card rounded-0">
           <div class="card-body">
             <h5 class="fw-bold mb-4">Apply Coupon</h5>
             <div class="input-group">
               <input type="text" class="form-control rounded-0" placeholder="Enter coupon code">
               <button class="btn btn-dark btn-ecomm rounded-0" type="button">Apply</button>
             </div>
            </div>
          </div> --}}


                    </div>
                </div>
                <!--end row-->

            </div>
        </section>
        <!--start product details-->

    </div>
@endsection
