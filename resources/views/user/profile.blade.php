@extends('user.master')

@section('content')


<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="row col-md-12">

        <div class="btn-group-vertical">
           <a href="{{url('/billing-add')}}" class=" btn btn-info">Billing Address</a>
           <button style="background-color: rgb(241, 236, 247); color:black;" class=" btn btn-success ">Your Cart</button>
           <button class=" btn btn-success">Your Wishlist</button>
        </div>
       
    </div>
    <br><br><br><br>
{{--     
    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
        @livewire('profile.update-profile-information-form')

        <x-jet-section-border />
    @endif --}}

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        <div class="mt-10 sm:mt-0">
            @livewire('profile.update-password-form')
        </div>

        <x-jet-section-border />
    @endif


</div>


@endsection