@extends('user.master')

@section('content')
     <!-- inner page section -->
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
     <!-- end inner page section -->

          <!-- Form section -->
          <section class="why_section layout_padding">
            <div class="container">
            
               <div class="row">
                  <div class="col-lg-8 offset-lg-2">
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