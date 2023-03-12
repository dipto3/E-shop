@extends('user.master')

@section('content')
     <!-- inner page section -->

     <!-- end inner page section -->

          <!-- Form section -->
          <section class="why_section layout_padding">
            <div class="container">
            
               <div class="row">
                  <div class="col col-lg-6">
                     <section class="inner_page_head">
                        <div class="container_fuild">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="full">
                                    <h3>Billing Address</h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <div class="full">
                        <form action="" method="POST">
                            @csrf
                         
                           <fieldset>
                            <input type="text" id="bill_name" value="{{$bills->name}}" placeholder="Enter full name" name="name" required />
                            <input type="email" id="bill_email" value="{{$bills->email}}"placeholder="Enter email address" name="email" required />
                            <input type="text"  id="bill_phone"value="{{$bills->phone}}" placeholder="Enter phone number" name="phone" required />
                            <input type="text"  id="bill_add" value="{{$bills->address}}"placeholder="Enter shipping address (House no.,Street,area)" name="address" required />
                            <input type="text" id="bill_city"value="{{$bills->city}}" placeholder="Enter city" name="city" required />
                            <input type="text" id="bill_district" value="{{$bills->district}}" placeholder="Enter district" name="district" required />
                            <input type="text" id="bill_zip"value="{{$bills->zip_code}}" placeholder="Enter zip code" name="zip" required />
                       <div class="col-md-12 row">
                        <div class="">
                              <input  class="form-control" type="checkbox" id="billtoship">  </div>
                              <div class="col-md-8">
                              <label for="billtoship"> Shipping address Same as Billing address
                              </label>
                           </div>
                             
                        </div>
                           </fieldset>
                       
                        </form>
                     </div>
                  </div>


                  <div class="col col-lg-6 ">
                     <section class="inner_page_head">
                        <div class="container_fuild">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="full">
                                    <h3>Shipping Address</h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <div class="full">
                        <form action="{{url('/store-shipping')}}" method="POST">
                            @csrf
                           <fieldset>
                              <input type="text" id="ship_name" value="" placeholder="Enter receivers full name" name="name" required />
                              <input type="email" id="ship_email" placeholder="Enter receivers email address" name="email" required />
                              <input type="text" id="ship_phone" placeholder="Enter receivers phone number" name="phone" required />
                              <input type="text" id="ship_add" placeholder="Enter receivers shipping address (House no.,Street,area)" name="add" required />
                              <input type="text" id="ship_city" placeholder="Enter receivers city" name="city" required />
                              <input type="text" id="ship_district" placeholder="Enter receivers district" name="district" required />
                              <input type="text" id="ship_zip" placeholder="Enter zip code" name="zip" required />

                              <button class="btn" style="float:right; color: rgb(255, 255, 255); background:#dc3545;" type="submit" > Submit <i class="fa-solid fa-arrow-right"></i> </button>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end Form section -->

@endsection