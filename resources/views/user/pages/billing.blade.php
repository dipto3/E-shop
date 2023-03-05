@extends('user.master')

@section('content')

     <!-- why section -->
     <section class="why_section layout_padding">
        <div class="container">
        
           <div class="row">
              <div class="col-lg-8 offset-lg-2">
                 <div class="full">
                    <form action="{{url('/billing-store')}}" method="POST">
                        @csrf
                       <fieldset>
                        <input type="text" value="" placeholder="Enter full name" name="name" required />
                        <input type="email" placeholder="Enter email address" name="email" required />
                        <input type="text" placeholder="Enter phone number" name="phone" required />
                        <input type="text" placeholder="Enter shipping address (House no.,Street,area)" name="address" required />
                        <input type="text" placeholder="Enter city" name="city" required />
                        <input type="text" placeholder="Enter district" name="district" required />
                        <input type="text" placeholder="Enter zip code" name="zip" required />
                        <button class="btn" style="float:right; color: rgb(255, 255, 255); background:#dc3545;" type="submit" > Submit  </button>
                       </fieldset>
                    </form>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- end why section -->

@endsection