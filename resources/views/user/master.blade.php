<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
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
      <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
      <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" />
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/bootstvrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      
      <link rel="stylesheet" href="{{asset('nouislider.min.css')}}">
      <link rel="stylesheet" href="{{asset('slick-theme.css')}}">
      

      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

      <style>
  
  /*****************globals*************/
  body {
    font-family: 'open sans';
    overflow-x: hidden; }
  
  img {
    max-width: 100%; }
  
  .preview {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column; }
    @media screen and (max-width: 996px) {
      .preview {
        margin-bottom: 20px; } }
  
  .preview-pic {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1; }
  
  .preview-thumbnail.nav-tabs {
    border: none;
    margin-top: 15px; }
    .preview-thumbnail.nav-tabs li {
      width: 18%;
      margin-right: 2.5%; }
      .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block; }
      .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0; }
      .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0; }
  
  .tab-content {
    overflow: hidden; }
    .tab-content img {
      width: 100%;
      -webkit-animation-name: opacity;
              animation-name: opacity;
      -webkit-animation-duration: .3s;
              animation-duration: .3s; }
  
  .card {
    margin-top: 50px;
    background: #eee;
    padding: 3em;
    line-height: 1.5em; }
  
  @media screen and (min-width: 997px) {
    .wrapper {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex; } }
  
  .details {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column; }
  
  .colors {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1; }
  
  .product-title, .price, .sizes, .colors {
    text-transform: UPPERCASE;
    font-weight: bold; }
  
  .checked, .price span {
    color: #002c3e; }
  
  .product-title, .rating, .product-description, .price, .vote, .sizes {
    margin-bottom: 15px; }
  
  .product-title {
    margin-top: 0; }
  
  .size {
    margin-right: 10px; }
    .size:first-of-type {
      margin-left: 40px; }
  
  .color {
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
    height: 2em;
    width: 2em;
    border-radius: 2px; }
    .color:first-of-type {
      margin-left: 20px; }
  
  .add-to-cart, .like {
    background: #f7444e;
    padding: 1.2em 1.5em;
    border: none;
    text-transform: UPPERCASE;
    font-weight: bold;
    color: #f7444e
    -webkit-transition: background .3s ease;
            transition: background .3s ease; }
    .add-to-cart:hover, .like:hover {
      background: #ce0e17;
      color: #fff; }
  
  .not-available {
    text-align: center;
    line-height: 2em; }
    .not-available:before {
      font-family: fontawesome;
      content: "\f00d";
      color: #fff; }
  
  .orange {
    background: #ff9f1a; }
  
  .green {
    background: #85ad00; }
  
  .blue {
    background: #0076ad; }
  
  .tooltip-inner {
    padding: 1.3em; }
  
  @-webkit-keyframes opacity {
    0% {
      opacity: 0;
      -webkit-transform: scale(3);
              transform: scale(3); }
    100% {
      opacity: 1;
      -webkit-transform: scale(1);
              transform: scale(1); } }
  
  @keyframes opacity {
    0% {
      opacity: 0;
      -webkit-transform: scale(3);
              transform: scale(3); }
    100% {
      opacity: 1;
      -webkit-transform: scale(1);
              transform: scale(1); } }
  
  /*# sourceMappingURL=style.css.map */

  
      </style>

   </head>
   <body>

    @include('sweetalert::alert')

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
         <p class="mx-auto">?? 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      
      <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
      <script>
          $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
      });
      </script>


<script>
 
  $(document).ready(function(){
    $(document).on('click','.add',function(e){

            e.preventDefault();
            let email = $('#email').val();
          
            // console.log(email);
    
     
            $.ajax({
                url:"{{route('email')}}",
                method:'POST',
                data:{email:email},
                success:function(res){

                    if(res.status == 'success'){
                  
                    $('#subscriber').load(location.href+' #subscriber');

                }
                },error:function(err){
                    let error = err.responseJSON;
                $.each(error.errors , function(index,value){
                    $(".errormgs").append('<span class="text-danger">'+value+'</span>'+'<br>')
                });
                }
            });
        })

  });
</script>


<script>
  $(document).ready(function(){

    $("#billtoship").click(function(){

      if(this.checked){
        $("#ship_name").val($("#bill_name").val());
        $("#ship_email").val($("#bill_email").val());
        $("#ship_phone").val($("#bill_phone").val());
        $("#ship_add").val($("#bill_add").val());
        $("#ship_city").val($("#bill_city").val());
        $("#ship_district").val($("#bill_district").val());
        $("#ship_zip").val($("#bill_zip").val());
      }else{
        $("#ship_name").val('');
        $("#ship_email").val('');
        $("#ship_phone").val('');
        $("#ship_add").val('');
        $("#ship_city").val('');
        $("#ship_district").val('');
        $("#ship_zip").val('');
      }
    });

  });
</script>
<script>
  function confirmation(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');  
    console.log(urlToRedirect); 
    swal({
        title: "Are you sure to remove this product",
        text: "You will not be able to revert this!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willCancel) => {
        if (willCancel) {


             
            window.location.href = urlToRedirect;
           
        }  


    });

    
}
</script>

      <!-- jQery -->
      <script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{asset('frontend/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('frontend/js/custom.js')}}"></script>

      <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
      <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      {!! Toastr::message() !!}
   </body>
</html>