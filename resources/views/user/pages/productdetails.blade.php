@extends('user.layouts.master')
@section('user.content')
    <div class="page-content">


        <!--start breadcrumb-->

        <!--end breadcrumb-->


        <!--start product details-->
        <section class="py-4">
            <div class="container">
                <div class="row g-4">

                    <div class="col-12 col-xl-7">
                        <div class="product-images">
                            <div class="product-zoom-images">
                                <form action="{{ route('cart.store', $products->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row row-cols-2 g-3">
                                        <div class="col">
                                            <div class="img-thumb-container overflow-hidden position-relative"
                                                data-fancybox="gallery" data-src="">
                                                <img src="{{ asset('/image/' . $products->image) }}" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </div>

                                    </div><!--end row-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5">
                        <div class="product-info">
                            <h4 class="product-title fw-bold mb-1">{{ $products->name }}</h4>
                            <p class="mb-0">{{ $products->category }}</p>
                            <div class="product-rating">
                                {{-- <div class="hstack gap-2 border p-1 mt-3 width-content">
                       <div><span class="rating-number">4.8</span><i class="bi bi-star-fill ms-1 text-warning"></i></div>
                       <div class="vr"></div>
                       <div>162 Ratings</div>
                     </div> --}}
                            </div>
                            <hr>
                            <div class="product-price d-flex align-items-center gap-3">
                                @if ($products->discount_price)
                                    <div class="h4 fw-bold"> &#2547;{{ $products->discount_price }}</div>
                                    <div class="h5 fw-light text-muted text-decoration-line-through">
                                        &#2547;{{ $products->price }}</div>
                                @else
                                    <div class="h4 fw-bold"> &#2547;{{ $products->price }}</div>
                                @endif
                                <div class="h4 fw-bold text-danger">(70% off)</div>
                            </div>
                            <p class="fw-bold mb-0 mt-1 text-success">inclusive of all taxes</p>

                            {{-- <div class="more-colors mt-4">
                     <h6 class="fw-bold mb-3">More Colors</h6>
                     <div class="d-flex align-items-center gap-3">
                       <div class="">
                         <a href="javascript:;">
                           <img src="assets/images/featured-products/01.webp" width="65" alt="">
                         </a>
                       </div>
                       <div class="">
                         <a href="javascript:;">
                           <img src="assets/images/featured-products/02.webp" width="65" alt="">
                         </a>
                       </div>
                       <div class="">
                         <a href="javascript:;">
                           <img src="assets/images/featured-products/03.webp" width="65" alt="">
                         </a>
                       </div>
                       <div class="">
                         <a href="javascript:;">
                           <img src="assets/images/featured-products/04.webp" width="65" alt="">
                         </a>
                       </div>
                     </div>
                   </div> --}}

                            <div class="row">
                                <div class="col size-chart mt-4">
                                    <h6 class="fw-bold mb-3">Select size</h6>
                                    <select name="size" class="sz form-control" id="">
                                        <option value="">Choose Size</option>
                                        @foreach (Json_decode($products->size) as $sizee)
                                            <option value="{{ $sizee }}">{{ $sizee }}</option>
                                        @endforeach

                                    </select>


                                </div>

                                <div class="col size-chart mt-4">
                                    <h6 class="fw-bold mb-3">Select color</h6>
                                    {{-- <div class="d-flex align-items-center gap-2 flex-wrap">
                       <div class="">
                         <button type="button">XS</button>
                       </div>
                       <div class="">
                        <button type="button">S</button>
                      </div>
                       <div class="">
                        <button type="button">M</button>
                      </div>
                      <div class="">
                        <button type="button">L</button>
                      </div>
                      <div class="">
                        <button type="button">XL</button>
                      </div>
                      <div class="">
                        <button type="button">XXL</button>
                      </div>
                     </div> --}}
                                    <select name="color" class="sz form-control" id="">
                                        <option value="">Choose Size</option>
                                        <option value="{{ $products->color }}">{{ $products->color }}</option>
                                    </select>

                                </div>
                            </div>

                            <div class="size-chart mt-4">
                                <h6 class="fw-bold mb-3">Select Quantity</h6>
                                <input class="form-control" name="quantity" type="number" min="1" value="0">
                            </div>
                        </div>


                        <div class="cart-buttons mt-3">
                            <div class="buttons d-flex flex-column flex-lg-row gap-3 mt-4">
                                <button type="submit" class="btn btn-lg btn-dark btn-ecomm px-5 py-3 col-lg-6"><i
                                        class="bi bi-basket2 me-2"></i>Add to Bag</button>
                                </form>
                                <form action="{{ route('wishlist.store', $products->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-lg btn-outline-dark btn-ecomm px-5 py-3"><i
                                            class="bi bi-suit-heart me-2"></i>Wishlist</button>
                                </form>
                            </div>
                        </div>
                        <hr class="my-3">
                        <div class="product-info">
                            <h6 class="fw-bold mb-3">Product Details</h6>
                            {{ $products->description }}
                        </div>

                    </div>
                </div>
            </div><!--end row-->
    </div>
    </section>
    <!--start product details-->


    <!--start product details-->

    <!--end product details-->


    </div>
@endsection
