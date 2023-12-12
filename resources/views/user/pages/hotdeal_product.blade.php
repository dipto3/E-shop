@extends('user.layouts.master')
@section('user.content')

<div class="page-content">



    <!--start product grid-->
    <section class="section-padding">
     <h5 class="mb-0 fw-bold d-none">Product Grid</h5>
     <div class="container">
       <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i class="bi bi-funnel me-1"></i> Filters</span></div>
        <div class="row">
           <div class="col-12 col-xl-3 filter-column">
               <nav class="navbar navbar-expand-xl flex-wrap p-0">
                 <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbarFilter" aria-labelledby="offcanvasNavbarFilterLabel">
                   <div class="offcanvas-header">
                     <h5 class="offcanvas-title mb-0 fw-bold" id="offcanvasNavbarFilterLabel">Filters</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                   </div>
                   <div class="offcanvas-body">
                     <div class="filter-sidebar">
                       <div class="card rounded-0">
                         <div class="card-header d-none d-xl-block bg-transparent">
                             <h5 class="mb-0 fw-bold">Filters</h5>
                         </div>
                         <div class="card-body">
                           <h6 class="p-1 fw-bold bg-light">Categories</h6>
                             <div class="categories">
                              <div class="categories-wrapper height-1 p-1">
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate1">
                                 <label class="form-check-label" for="chekCate1">
                                   <span>Shirts</span><span class="product-number">(1548)</span>
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate2">
                                 <label class="form-check-label" for="chekCate2">
                                   <span>Jeans</span><span class="product-number">(568)</span>
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate3">
                                 <label class="form-check-label" for="chekCate3">
                                   <span>Kurtas</span><span class="product-number">(784)</span>
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate4">
                                 <label class="form-check-label" for="chekCate4">
                                   <span>Makeup</span><span class="product-number">(1789)</span>
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate5">
                                 <label class="form-check-label" for="chekCate5">
                                   <span>Shoes</span><span class="product-number">(358)</span>
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate6">
                                 <label class="form-check-label" for="chekCate6">
                                   <span>Heels</span><span class="product-number">(572)</span>
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate7">
                                 <label class="form-check-label" for="chekCate7">
                                   <span>Lehenga</span><span class="product-number">(754)</span>
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate8">
                                 <label class="form-check-label" for="chekCate8">
                                   <span>Laptops</span><span class="product-number">(541)</span>
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate9">
                                 <label class="form-check-label" for="chekCate9">
                                   <span>Jewellary</span><span class="product-number">(365)</span>
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate10">
                                 <label class="form-check-label" for="chekCate10">
                                   <span>Sports</span><span class="product-number">(4512)</span>
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate11">
                                 <label class="form-check-label" for="chekCate11">
                                   <span>Music</span><span class="product-number">(647)</span>
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate12">
                                 <label class="form-check-label" for="chekCate12">
                                   <span>Headphones</span><span class="product-number">(9848)</span>
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate13">
                                 <label class="form-check-label" for="chekCate13">
                                   <span>Sunglasses</span><span class="product-number">(751)</span>
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="chekCate14">
                                 <label class="form-check-label" for="chekCate14">
                                   <span>Belts</span><span class="product-number">(4923)</span>
                                 </label>
                               </div>
                              </div>
                           </div>
                           <hr>

                           <hr>

                       </div>
                     </div>
                   </div>
                 </div>
             </nav>
           </div>
           <div class="col-12 col-xl-9">
             <div class="shop-right-sidebar">
               <div class="card rounded-0">
                 <div class="card-body p-2">
                   <div class="d-flex align-items-center justify-content-between bg-light p-2">
                      <div class="product-count">657 Items Found</div>
                      {{-- <div class="view-type hstack gap-2 d-none d-xl-flex">
                         <p class="mb-0">Grid</p>
                         <div>
                           <a href="shop-grid.html" class="grid-type-3 d-flex gap-1 active">
                             <span></span>
                             <span></span>
                             <span></span>
                           </a>
                         </div>
                         <div>
                           <a href="shop-grid-type-5.html" class="grid-type-3 d-flex gap-1">
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                           </a>
                         </div>
                      </div> --}}
                      <form>
                       {{-- <div class="input-group">
                         <span class="input-group-text bg-transparent rounded-0 border-0">Sort By</span>
                         <select class="form-select rounded-0">
                           <option selected>Whats'New</option>
                           <option value="1">Popularity</option>
                           <option value="2">Better Discount</option>
                           <option value="3">Price : Hight to Low</option>
                           <option value="4">Price : Low to Hight</option>
                           <option value="5">Custom Rating</option>
                         </select>
                       </div> --}}
                     </form>
                   </div>
                 </div>
               </div>

               <div class="product-grid mt-4">
                 <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach ($products as $product)
                        <div class="col">
                            <div class="card border shadow-none">
                            <div class="position-relative overflow-hidden">
                                <div class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                                <a href="javascript:;"><i class="bi bi-heart"></i></a>
                                <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                                <a href=""><i class="bi bi-zoom-in"></i></a>
                                </div>
                                <a href="{{ route('product.details' , $product->id) }}">
                                <img src="{{ asset('/image/' . $product->image) }}" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card-body border-top">
                                <h5 class="mb-0 fw-bold product-short-title">{{ $product->name }}</h5>
                                <p class="mb-0 product-short-name">{{ $product->category }}</p>
                             
                                <div class="product-price d-flex align-items-center gap-2 mt-2">
                                  @if ($product->discount_price)
                                <div class="h6 fw-bold">&#2547;{{ $product->discount_price }}</div>
                                <div class="h6 fw-light text-muted text-decoration-line-through">&#2547;{{ $product->price }}</div>
                                @else
                                <div class="h6 fw-bold">&#2547;{{ $product->price }}</div>
                                @endif
                                <div class="h6 fw-bold text-danger">(70% off)</div>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach
                  </div><!--end row-->
                </div>

             <hr class="my-4">

             <div class="product-pagination">
               <nav>
                 <ul class="pagination justify-content-center">
                   <li class="page-item disabled">
                     <a class="page-link">Previous</a>
                   </li>
                   <li class="page-item active"><a class="page-link" href="javascript:;">1</a></li>
                   <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
                   <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                   <li class="page-item">
                     <a class="page-link" href="javascript:;">Next</a>
                   </li>
                 </ul>
               </nav>
             </div>

             </div>
           </div>
        </div><!--end row-->
     </div>
   </section>
    <!--start product details-->
  </div>

@endsection