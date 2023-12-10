<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Contact Us</h3>
                        <p>{{ $setting['description']}}</p>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-map-marker"></i>{{ $setting['location']}}</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>{{ $setting['phn']}}</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i>{{ $setting['email']}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Categories</h3>
                        <ul class="footer-links">
                            @foreach($categories as $category )
                            <li><a href="{{url('/productbycat/'.$category->name)}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Information</h3>
                        <ul class="footer-links">
                            @foreach(App\Models\Page::all() as $page)
                            <li><a href={{url('/pages',['pageSlug'=>$page->slug])}}>{{$page->title}}</a></li>

                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Service</h3>
                        <ul class="footer-links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->

    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
                  
                    <span class="copyright">

                        <b></b>System Design & Developed by: </b> <a href="https://www.facebook.com/dipto.error.404" target="_blank"><b class="text-primary">Dipto </b></a> & <a href="https://www.facebook.com/annanna.roy" target="_blank"><b class="text-primary"> Anannya</b></a>
                    </span>
                </div>
            </div>
                <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bottom footer -->
</footer>
