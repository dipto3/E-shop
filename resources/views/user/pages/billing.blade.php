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
                       
                        <input type="text" value="{{$bills->address}}" placeholder="Enter shipping address (House no.,Street,area)" name="address" required />
                        <input type="text" value="{{$bills->city}}" placeholder="Enter city" name="city" required />
                        <input type="text"value="{{$bills->district}}" placeholder="Enter district" name="district" required />
                        <input type="text" value="{{$bills->zip_code}}" placeholder="Enter zip code" name="zip" required />
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