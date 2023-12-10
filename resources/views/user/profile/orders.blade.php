@extends('user.layouts.master')
@section('user.content')
    <div class="page-content">

           <!--end breadcrumb-->

           <!--start product details-->
           <section class="section-padding">
            <div class="container">
               <div class="d-flex align-items-center px-3 py-2 border mb-4">
                <div class="text-start">
                  <h4 class="mb-0 h4 fw-bold">Orders</h4>
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
                              <a href="{{ url('/account-dashboard') }}" class="list-group-item"><i class="bi bi-house-door me-2"></i>Dashboard</a>
                              <a href="{{ url('/all-orders') }}" class="list-group-item active"><i class="bi bi-basket3 me-2"></i>Orders</a>
                              <a href="{{ url('/profile') }}" class="list-group-item "><i class="bi bi-person me-2"></i>Profile</a>

                              <a href="{{url('/billing-address')}}" class="list-group-item "><i class="bi bi-pin-map me-2"></i>Billing Address</a>

                              <a href="" class="list-group-item"><i class="bi bi-power me-2"></i>Logout</a>
                            </div>
                          </div>
                        </div>
                    </nav>
                  </div>
                  <div class="col-md-9">
                    <table class="table table-striped" style="margin-top: 10px;">
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
                            {{-- <td>{{$orderlist->delivery_status}}</td> --}}
                            <td>
                                @if($orderlist->delivery_status == 'Synced')
                                <h5>Order Confirm</h5>
                                @elseif($orderlist->delivery_status == 'Cancel by user')
                                <h5>Order Cancel</h5>
                                @else
                                {{$orderlist->delivery_status}}
                                @endif
                            </td>
                            <td>
                                <img src="{{asset('/image/'.$images)}}" style="width:100px; height:100px;">
                            </td>
                            <td>
                                @if($orderlist->delivery_status == 'processing')
                                <a href="{{url('/order-cancel/'.$orderlist->id)}}" onclick=" confirmation(event)" class="btn btn-danger">Cancel Order</a>
                                @else
                                <h5>Nothing to action</h5>
                                @endif
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
               </div><!--end row-->
            </div>
          </section>
           <!--start product details-->


           <!-- filter Modal -->
            <div class="modal" id="FilterOrders" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content rounded-0">
                  <div class="modal-header">
                    <h5 class="modal-title fw-bold">Filter Orders</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <h6 class="mb-3 fw-bold">Status</h6>
                      <div class="status-radio d-flex flex-column gap-2">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                          <label class="form-check-label" for="flexRadioDefault1">
                            All
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                          <label class="form-check-label" for="flexRadioDefault2">
                            On the way
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                          <label class="form-check-label" for="flexRadioDefault3">
                            Delivered
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                          <label class="form-check-label" for="flexRadioDefault4">
                            Cancelled
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                          <label class="form-check-label" for="flexRadioDefault5">
                            Returned
                          </label>
                        </div>
                      </div>
                      <hr>
                      <h6 class="mb-3 fw-bold">Time</h6>
                      <div class="status-radio d-flex flex-column gap-2">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault6" checked>
                          <label class="form-check-label" for="flexRadioDefault6">
                            Anytime
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault7">
                          <label class="form-check-label" for="flexRadioDefault7">
                            Last 30 days
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault8">
                          <label class="form-check-label" for="flexRadioDefault8">
                            Last 6 months
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault9">
                          <label class="form-check-label" for="flexRadioDefault9">
                            Last year
                          </label>
                        </div>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <div class="d-flex align-items-center gap-3 w-100">
                      <button type="button" class="btn btn-outline-dark btn-ecomm w-50">Clear Filters</button>
                      <button type="button" class="btn btn-dark btn-ecomm w-50">Apply</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end Filters Modal -->
    </div>

@endsection
