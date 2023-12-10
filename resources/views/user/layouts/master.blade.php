<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('user.partials.styles')
    <title>@yield('title', 'Home')</title>
</head>

<body>
    <!--start top header-->
    @include('user.header')
    <!--end top header-->
    <!--start page content-->
    @yield('user.content')
    <!--end page content-->
    @include('user.newsletter')
    @include('user.footer')
    <!--start cart-->
    @include('user.cart_side')
    <!--end cat-->
    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!--End Back To Top Button-->

    <!-- JavaScript files -->
    @include('user.partials.scripts')
</body>

</html>
