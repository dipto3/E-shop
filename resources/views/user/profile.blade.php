@extends('user.master')

@section('content')


<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
   


    <div class="row col-md-12">
        <div class="col col-md-6">
            <P>Profile Information</p>
            <p style="color:rgb(155, 148, 148); font-size:14px;">Update your account's profile information.</p>

            <div class="row col-md-12" style="margin-top: 5%; border: 1px red;">

                <div style="" class="btn-group-vertical">
                   <a style="background-color: rgb(241, 236, 247); color:black;" href="{{url('/billing-add')}}" class=" btn ">Billing Address</a>
                   <a style=" background-color: rgb(241, 236, 247); color:black;" href="" class=" btn  ">Your Cart</a>
                   <a style="background-color: rgb(241, 236, 247); color:black;" href="" class=" btn ">Your Wishlist</a>
                   <a style="background-color: rgb(241, 236, 247); color:black;" href="{{url('/order-list')}}" class=" btn ">Your Order</a>
                </div>
               
            </div>
        </div>

        <form class="col col-md-6">
            
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div style="" class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Username">
            </div>
         
            <div class="form-group">
                <input type="text" class="form-control item" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="phone-number" placeholder="Phone Number">
            </div>
          
            <div class="form-group">
                <button type="button" class="btn btn-block create-account">Update</button>
            </div>
        </form>
    </div>
    
    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
        @livewire('profile.update-profile-information-form')

        <x-jet-section-border />
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        <div class="mt-10 sm:mt-0">
            @livewire('profile.update-password-form')
        </div>

        <x-jet-section-border />
    @endif


</div>


@endsection