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
                            <input type="text" value="" placeholder="Enter full name" name="name" required />
                            <input type="email" placeholder="Enter email address" name="email" required />
                            <input type="text" placeholder="Enter phone number" name="phone" required />
                            <input type="text" placeholder="Enter shipping address (House no.,Street,area)" name="address" required />
                            <input type="text" placeholder="Enter city" name="city" required />
                            <input type="text" placeholder="Enter district" name="district" required />
                            <input type="text" placeholder="Enter zip code" name="zip" required />
                           
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
                              <input type="text" value="" placeholder="Enter receivers full name" name="name" required />
                              <input type="email" placeholder="Enter receivers email address" name="email" required />
                              <input type="text" placeholder="Enter receivers phone number" name="phone" required />
                              <input type="text" placeholder="Enter receivers shipping address (House no.,Street,area)" name="add" required />
                              <input type="text" placeholder="Enter receivers city" name="city" required />
                              <input type="text" placeholder="Enter receivers district" name="district" required />
                              <input type="text" placeholder="Enter zip code" name="zip" required />

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