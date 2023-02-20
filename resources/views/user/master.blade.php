<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('frontend/css/font-awesome.min.css" rel="stylesheet')}}" />
      <!-- Custom styles for this template -->
      <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" />
       <!-- view details style -->
       {{-- <link rel="stylesheet" href="{{asset('viewdetails/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('viewdetails/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('viewdetails/css/nouislider.min.css')}}">
<link rel="stylesheet" href="{{asset('viewdetails/css/slick-theme.css')}}">
<link rel="stylesheet" href="{{asset('viewdetails/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('viewdetails/css/style.scss')}}"> --}}
    
       {{-- <link rel="stylesheet" href="{{asset('viewdetails/fonts/fontawesome-webfont.ttf')}}">
       <link rel="stylesheet" href="{{asset('viewdetails/fonts/fontawesome-webfont.woff')}}">
       <link rel="stylesheet" href="{{asset('viewdetails/fonts/fontawesome-webfont.woff2')}}">
       <link rel="stylesheet" href="{{asset('viewdetails/images/arrival-bg.jpg')}}">
       <link rel="stylesheet" href="{{asset('vi')}}"> --}}
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('user.header')
         <!-- end header section -->
         <!-- slider section -->
         @yield('content')
      <!-- end subscribe section -->
      <!-- client section -->

      <!-- end client section -->
      <!-- footer start -->
      @include('user.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{asset('frontend/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('frontend/js/custom.js')}}"></script>
        <!-- viewdetails js -->

       
   </body>
</html>