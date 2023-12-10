<!doctype html>
<html lang="en" class="light-theme">


<!-- Mirrored from codervent.com/shopingo/demo/shopingo_V1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 04:25:33 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--favicon-->
  <link rel="icon" href="{{asset('assets/images/favicon-32x32.webp')}}" type="image/webp" />

  <!-- CSS files -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/cdn.jsdelivr.net/npm/bootstrap-icons%401.7.2/font/bootstrap-icons.css')}}">
  <!-- Plugins -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/slick/slick.css')}}" />
  <link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick-theme.css" />

  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/dark-theme.css')}}" rel="stylesheet">

  <title>Shopingo - eCommerce HTML Template</title>
</head>

<body>


     <!--page loader-->
     {{-- <div class="loader-wrapper">
      <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
        <div class="spinner-border text-dark" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div> --}}
   <!--end loader-->

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


  <!--start quick view-->

  <!-- Modal -->
  <div class="modal fade" id="QuickViewModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content rounded-0">

        <div class="modal-body">
          <div class="row g-3">
            <div class="col-12 col-xl-6">

              <div class="wrap-modal-slider">

                <div class="slider-for">
                  <div>
                    <img src="assets/images/product-images/01.jpg" alt="" class="img-fluid">
                  </div>
                  <div>
                    <img src="assets/images/product-images/02.jpg" alt="" class="img-fluid">
                  </div>
                  <div>
                    <img src="assets/images/product-images/03.jpg" alt="" class="img-fluid">
                  </div>
                  <div>
                    <img src="assets/images/product-images/04.jpg" alt="" class="img-fluid">
                  </div>
                </div>

                <div class="slider-nav mt-3">
                  <div>
                    <img src="assets/images/product-images/01.jpg" alt="" class="img-fluid">
                  </div>
                  <div>
                    <img src="assets/images/product-images/02.jpg" alt="" class="img-fluid">
                  </div>
                  <div>
                    <img src="assets/images/product-images/03.jpg" alt="" class="img-fluid">
                  </div>
                  <div>
                    <img src="assets/images/product-images/04.jpg" alt="" class="img-fluid">
                  </div>
                </div>

              </div>

            </div>
            <div class="col-12 col-xl-6">
              <div class="product-info">
                <h4 class="product-title fw-bold mb-1">Check Pink Kurta</h4>
                <p class="mb-0">Women Pink & Off-White Printed Kurta with Palazzos</p>
                <div class="product-rating">
                  <div class="hstack gap-2 border p-1 mt-3 width-content">
                    <div><span class="rating-number">4.8</span><i class="bi bi-star-fill ms-1 text-success"></i></div>
                    <div class="vr"></div>
                    <div>162 Ratings</div>
                  </div>
                </div>
                <hr>
                <div class="product-price d-flex align-items-center gap-3">
                  <div class="h4 fw-bold">$458</div>
                  <div class="h5 fw-light text-muted text-decoration-line-through">$2089</div>
                  <div class="h4 fw-bold text-danger">(70% off)</div>
                </div>
                <p class="fw-bold mb-0 mt-1 text-success">inclusive of all taxes</p>

                <div class="more-colors mt-3">
                  <h6 class="fw-bold mb-3">More Colors</h6>
                  <div class="d-flex align-items-center gap-2 flex-wrap">
                    <div class="color-box bg-red"></div>
                    <div class="color-box bg-primary"></div>
                    <div class="color-box bg-yellow"></div>
                    <div class="color-box bg-purple"></div>
                    <div class="color-box bg-green"></div>
                  </div>
                </div>

                <div class="size-chart mt-3">
                  <h6 class="fw-bold mb-3">Select Size</h6>
                  <div class="d-flex align-items-center gap-2 flex-wrap">
                    <div class="">
                      <button type="button" class="rounded-0">XS</button>
                    </div>
                    <div class="">
                      <button type="button" class="rounded-0">S</button>
                    </div>
                    <div class="">
                      <button type="button" class="rounded-0">M</button>
                    </div>
                    <div class="">
                      <button type="button" class="rounded-0">L</button>
                    </div>
                    <div class="">
                      <button type="button" class="rounded-0">XL</button>
                    </div>
                    <div class="">
                      <button type="button" class="rounded-0">XXL</button>
                    </div>
                  </div>
                </div>
                <div class="cart-buttons mt-3">
                  <div class="buttons d-flex flex-column gap-3 mt-4">
                    <a href="javascript:;" class="btn btn-lg btn-dark btn-ecomm px-5 py-3 flex-grow-1"><i
                        class="bi bi-basket2 me-2"></i>Add to Bag</a>
                    <a href="javascript:;" class="btn btn-lg btn-outline-dark btn-ecomm px-5 py-3"><i
                        class="bi bi-suit-heart me-2"></i>Wishlist</a>
                  </div>
                </div>
                <hr class="my-3">
                <div class="product-share">
                  <h6 class="fw-bold mb-3">Share This Product</h6>
                  <div class="d-flex align-items-center gap-2 flex-wrap">
                    <div class="">
                      <button type="button" class="btn-social bg-twitter"><i class="bi bi-twitter"></i></button>
                    </div>
                    <div class="">
                      <button type="button" class="btn-social bg-facebook"><i class="bi bi-facebook"></i></button>
                    </div>
                    <div class="">
                      <button type="button" class="btn-social bg-linkden"><i class="bi bi-linkedin"></i></button>
                    </div>
                    <div class="">
                      <button type="button" class="btn-social bg-youtube"><i class="bi bi-youtube"></i></button>
                    </div>
                    <div class="">
                      <button type="button" class="btn-social bg-pinterest"><i class="bi bi-pinterest"></i></button>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!--end row-->
        </div>

      </div>
    </div>
  </div>
  <!--end quick view-->


  <!--Start Back To Top Button-->
  <a href="javaScript:;" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
  <!--End Back To Top Button-->


  <!-- JavaScript files -->
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('assets/js/index.js')}}"></script>
  <script src="{{asset('assets/js/loader.js')}}"></script>
  <script>
    $(document).ready(function () {
        $('#subscribe_submit').click(function (e) {
            e.preventDefault();
            var email = $('#email_subscribe').val();
            if (email == '') {
                toastr.error('Please Enter Your Email');
            } else {
                $.ajax({
                    url: "{{ url('/subscribe-us') }}",
                    type: "POST",
                    data: {
                        "email": email,
                        "_token": "{{csrf_token()}}"
                    },
                    success: function ({message,status:code}, status) {
                        if (status === 'success') {
                            if(code==202){
                                toastr.error('You Have Already Subscribed');
                                return false;
                            }
                            $.ajax({
                                url: "{{ url('/check-subscribe-mail') }}",
                                type: "POST",
                                data: {
                                    "email": email,
                                    "_token": "{{csrf_token()}}"
                                },
                                success: function (data) {
                                    toastr.success('You Are Subscribed');
                                },
                            });
                        }
                    },
                });
            }
        });
    })
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
</body>


<!-- Mirrored from codervent.com/shopingo/demo/shopingo_V1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 04:25:57 GMT -->
</html>
