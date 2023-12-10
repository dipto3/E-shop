<?php
$totalitem = 0;
?>
@foreach ($carts as $cart)
    <?php
    $totalitem = $totalitem + $cart->quantity;
    ?>
@endforeach

<header class="top-header">
    <nav class="navbar navbar-expand-xl w-100 navbar-dark container gap-3">
        <a class="navbar-brand d-none d-xl-inline" href="{{ url('/') }}"><img src="" class="logo-img"
                alt=""></a>
        <a class="mobile-menu-btn d-inline d-xl-none" href="{{ url('/') }}" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar">
            <i class="bi bi-list"></i>
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
            <div class="offcanvas-header">
                <div class="offcanvas-logo"><img src="assets/images/logo.webp" class="logo-img" alt="">
                </div>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body primary-menu">
                <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="tv-shows.html"
                            data-bs-toggle="dropdown">
                            Categories
                        </a>
                        <div class="dropdown-menu dropdown-large-menu">
                            <div class="row">
                                <div class="col-12 col-xl-4">
                                    {{-- <h6 class="large-menu-title">Fashion</h6> --}}
                                    <ul class="list-unstyled">
                                        @foreach ($categories as $category)
                                            <li><a
                                                    href="{{ url('/productbycat/' . $category->name) }}">{{ $category->name }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <!-- end col-3 -->

                                <!-- end col-3 -->

                                <!-- end col-3 -->
                            </div>
                            <!-- end row -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                            data-bs-toggle="dropdown">
                            Account
                        </a>
                        <ul class="dropdown-menu">
                            @if (Route::has('login'))
                                @auth
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <li><a class="dropdown-item" href="account-profile.html">My Profile</a></li>

                                        <li><a class="dropdown-item" href="route('logout')"
                                                onclick="event.preventDefault();
              this.closest('form').submit();">Logout</a>
                                        </li>
                                    </form>
                                @else
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                @endauth
                            @endif
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <ul class="navbar-nav secondary-menu flex-row">
            <li class="nav-item">
                <a class="nav-link dark-mode-icon" href="javascript:;">
                    <div class="mode-icon">
                        <i class="bi bi-moon"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="bi bi-search"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('all.wishlist') }}"><i class="bi bi-suit-heart"></i></a>
            </li>
            <li class="nav-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                <a class="nav-link position-relative" href="javascript:;">
                    <div class="cart-badge">{{ $totalitem }}</div>
                    <i class="bi bi-basket2"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.dashboard') }}"><i class="bi bi-person-circle"></i></a>
            </li>
        </ul>
    </nav>
</header>
