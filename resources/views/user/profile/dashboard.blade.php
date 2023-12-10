@extends('user.layouts.master')
@section('user.content')

<div class="page-content">

    <!--start product details-->
    <section class="section-padding">
     <div class="container">
       <div class="d-flex align-items-center px-3 py-2 border mb-4">
         <div class="text-start">
           <h4 class="mb-0 h4 fw-bold">Account - Dashboard</h4>
        </div>
       </div>
      <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i class="bi bi-person me-2"></i>Account</span></div>
        <div class="row">
           <div class="col-12 col-xl-3 filter-column">
               <nav class="navbar navbar-expand-xl flex-wrap p-0">
                 <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbarFilter" aria-labelledby="offcanvasNavbarFilterLabel">
                   <div class="offcanvas-header">
                     <h5 class="offcanvas-title mb-0 fw-bold text-uppercase" id="offcanvasNavbarFilterLabel">Account</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                   </div>
                   <div class="offcanvas-body account-menu">
                    <div class="list-group w-100 rounded-0">
                      <a href="{{ url('/account-dashboard') }}" class="list-group-item active"><i class="bi bi-house-door me-2"></i>Dashboard</a>
                      <a href="{{ url('/all-orders') }}" class="list-group-item"><i class="bi bi-basket3 me-2"></i>Orders</a>
                      <a href="{{ url('/profile') }}" class="list-group-item "><i class="bi bi-person me-2"></i>Profile</a>

                      <a href="{{url('/billing-address')}}" class="list-group-item"><i class="bi bi-pin-map me-2"></i>Billing Address</a>
                    
                      <a href="" class="list-group-item"><i class="bi bi-power me-2"></i>Logout</a>
                    </div>
                  </div>
                 </div>
             </nav>
           </div>
           <div class="col-12 col-xl-9">
              {{-- <div class="card rounded-0 bg-light">
                  <div class="card-body">
                    <div class="d-flex flex-wrap flex-row align-items-center gap-3">
                      <div class="profile-pic">
                         <img src="assets/images/avatars/01.html" width="140" alt="">
                      </div>
                      <div class="profile-email flex-grow-1">
                        <p class="mb-0 fw-bold text-content">michel@example.com</p>
                      </div>
                      <div class="edit-button align-self-start">
                        <a href="account-edit-profile.html" class="btn btn-outline-dark btn-ecomm"><i class="bi bi-pencil-fill me-2"></i>Edit Profile</a>
                      </div>
                    </div>
                  </div>
              </div> --}}

              <div class="row row-cols-1 row-cols-lg-3 g-4 pt-4">
                <div class="col">
                  <a href="account-orders.html">
                   <div class="card rounded-0">
                     <div class="card-body p-5">
                         <div class="text-center">
                            <div class="fs-2 mb-3 text-content"><i class="bi bi-box-seam"></i></div>
                            <h6 class="mb-0">Orders</h6>
                         </div>
                     </div>
                   </div>
                  </a>
                </div>
                <div class="col">
                 <a href="wishlist.html">
                 <div class="card rounded-0">
                   <div class="card-body p-5">
                       <div class="text-center">
                          <div class="fs-2 mb-3 text-content"><i class="bi bi-suit-heart"></i></div>
                          <h6 class="mb-0">Wishlist</h6>
                       </div>
                   </div>
                 </div>
                </a>
                </div>
                <div class="col">
                 <a href="{{ url('/view-cart') }}">
                 <div class="card rounded-0">
                   <div class="card-body p-5">
                       <div class="text-center">
                          <div class="fs-2 mb-3 text-content"><i class="bi bi-basket3"></i></div>
                          <h6 class="mb-0">Cart</h6>
                       </div>
                   </div>
                 </div>
                </a>
                </div>
                <div class="col">
                 <a href="account-saved-address.html">
                 <div class="card rounded-0">
                   <div class="card-body p-5">
                       <div class="text-center">
                          <div class="fs-2 mb-3 text-content"><i class="bi bi-geo-alt"></i></div>
                          <h6 class="mb-0">Addresses</h6>
                       </div>
                   </div>
                 </div>
                </a>
                </div>
                {{-- <div class="col">
                 <a href="javascript:;">
                 <div class="card rounded-0">
                   <div class="card-body p-5">
                       <div class="text-center">
                          <div class="fs-2 mb-3 text-content"><i class="bi bi-bookmarks"></i></div>
                          <h6 class="mb-0">Coupons</h6>
                       </div>
                   </div>
                 </div>
                </a>
                </div> --}}
                <div class="col">
                 <a href="account-profile.html">
                 <div class="card rounded-0">
                   <div class="card-body p-5">
                       <div class="text-center">
                          <div class="fs-2 mb-3 text-content"><i class="bi bi-person"></i></div>
                          <h6 class="mb-0">Profile Details</h6>
                       </div>
                   </div>
                 </div>
                </a>
                </div>

              </div><!--end row-->


           </div>
        </div><!--end row-->
     </div>
   </section>
    <!--start product details-->




  </div>

@endsection
