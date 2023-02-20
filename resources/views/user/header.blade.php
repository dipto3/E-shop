<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{'/'}}"><img width="250" src="{{asset('frontend/images/logo.png')}}" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="{{'/'}}">Home <span class="sr-only">(current)</span></a>
                </li>
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Categories <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                     @foreach ($categories as $category )
                     <li><a href="{{url('/productbycat/'.$category->name)}}">{{$category->name}}</a></li>
                     @endforeach
                     
                  
                   </ul>
                </li>
               
                <li class="nav-item">
                   <a class="nav-link" href="{{url('/allproducts')}}">Product</a>
                </li> 
                <li class="nav-item">
                   <a class="nav-link" href="blog_list.html">About</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="contact.html">Contact us</a>
                </li>

                @if (Route::has('login'))
                   @auth


                   {{-- <form method="POST" action="{{ route('logout') }}">
                      @csrf
  
                      <li class="nav-item">
                         <a class="nav-link" href="{{ route('logout') }}"
                         @click.prevent="$root.submit();">Logout</a>
                      </li>
                  </form> --}}
                  <x-app-layout>

                  </x-app-layout>
                  {{-- <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label"> {{ Auth::user()->name }} <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="{{route('user.logout')}}">Log Out</a></li>
                        <li><a href="{{route('profile')}}">Profile</a></li>
                     </ul>
                  </li> --}}
                  
                 

                @else
                <li class="nav-item">
                   <a class="nav-link" href="{{ route('login') }}">Login</a>


                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>


                 </li>
                 @endauth
                 @endif
              
               
               
             </ul>
          </div>
       </nav>
    </div>
 </header>