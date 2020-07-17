<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{Setting::get('site_title')}}</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ Setting::get('site_favicon', asset('favicon.ico')) }}">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/user/css/bootstrapp.min.css')}}" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="{{ asset('assets/user/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Ionicons CSS -->
    <link href="{{ asset('assets/user/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- Material Icons CSS -->
    <link href="{{ asset('assets/user/material-icons/css/materialdesignicons.min.css')}}" rel="stylesheet">
    <!-- Slick CSS -->
    <link href="{{ asset('assets/user/css/slick.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/slick-theme.css')}}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('assets/user/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/animate.min')}}" rel="stylesheet">
</head>


<!-- Navbar Starts -->
   
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button> -->
          <!-- <a class="navbar-brand" href="#myPage">Logo</a> -->


          <div class="login-logo col-md-4 col-sm-4 col-xs-12">
                <img src="{{asset('assets/user/img/grocery_icon.png')}}"></i>
            </div>

            



        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
             


              <li>@if(Auth::guest())<a href="javascript:void(0);"class="login-item signinform">Login</a>@endif</li>

              <li>@if(Auth::guest())<a href="javascript:void(0);"class="signup-item signupform">Signup</a>@endif</li>
              
                <li><a href="#about">About</a></li>
                <li><a href="#services">Career</a></li>
                <li><a href="#portfolio">Blog</a></li>
                <li><a href="#pricing">Contact</a></li>

                        <li class="dropdown-toggle" data-toggle="dropdown"><a href="#Categories">Categories</a></li>
                        <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="http://localhost/grocery/public/restaurants">Fruits & Vegetables</a></li>
                            <li><a href="http://localhost/grocery/public/restaurants">Bakery, Cakes & Dairy</a></li>
                            <li><a href="http://localhost/grocery/public/restaurants">Beverages</a></li>
                            <li><a href="http://localhost/grocery/public/restaurants">Beauty & Hygiene</a></li>
                            <li><a href="http://localhost/grocery/public/restaurants">Cleaning & Household</a></li>
                            <li><a href="http://localhost/grocery/public/restaurants">Kitchen , Garden & Pets</a></li>
                            <li><a href="http://localhost/grocery/public/restaurants">Baby Care</a></li>
                          </ul>
            </ul>
        </div>
      </div>
    </nav>

    <!-- Navbar end -->



<!-- Banner Section Start -->
<!-- <div class="jumbotron text-center"> -->
<div class="login-right-img bg-img text-center" style="background-image: url({{asset('assets/user/img/top-banner.jpg')}});">
    <div class="hero-image">
        <div class="login-content-right col-md-12 col-sm-12 col-xs-12 p-0">
                <!-- Login Wrapper Starts -->
                    <div class="login-main-wrapper">
                <!-- Login Content Wrap Starts -->
                    <div class="login-content-wrap">
                <!-- Login Content Starts -->
                    <div class="login-content row">
                <!-- Login Content Left Starts -->
                    <div class="login-content-left">
                <!-- Logo Section Starts -->
                    <div class="logo-sec row">

                    <!-- <div class="login-logo col-md-4 col-sm-4 col-xs-12"> -->
                        <!-- <a class="navbar-brand" href="#">Categories</a> -->
                        <!-- <button class="btn btn-primary dropdown-toggle navbar-brand" type="button" data-toggle="dropdown">Categories
                        <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Fruits & Vegetables</a></li>
                            <li><a href="#">Foodgrains & Oils</a></li>
                            <li><a href="#">Bakery, Cakes & Dairy</a></li>
                            <li><a href="#">Beverages</a></li>
                            <li><a href="#">Beauty & Hygiene</a></li>
                            <li><a href="#">Cleaning & Household</a></li>
                            <li><a href="#">Kitchen , Garden & Pets</a></li>
                            <li><a href="#">Eggs, Meat & Fish</a></li>
                            <li><a href="#">Baby Care</a></li>
                          </ul>
                    </div> -->

                    <!-- <div class="login-menu col-md-8 col-sm-8 col-xs-12">
                        @if(Auth::guest())
                        <a href="javascript:void(0);"class="login-item signinform">Login</a>
                        <a href="javascript:void(0);"class="signup-item signupform">Signup</a>
                        @endif
                    </div> -->
                <!-- Login Section Ends -->
                      @include('include.alerts')
                <!-- Log Location Section Starts -->

                <div class="log-location">
                    <div class="log-loc-content">
                        <div class="log-loc-txt-slide">
                            <h3 class="loc-slide-tit">Online grocery delivery software</h3>
                            <h3 class="loc-slide-tit">My Smart Basket</h3>        
                        </div>
                        <h5 class="log-loc-txt">An online grocery ordering and delivery system for Supermarkets.<br>Manage online orders are made easy..!</h5>
                    </div>
                </div>       

                <!-- Location Form Starts -->
                    <form action="{{url('restaurants')}}" id="my_map_form" > 

                        <div class="log-location-search input-group">
                            <div class="log-location-search input-group">
                                <!-- <span class="input-group-addon locate-me-btn my_map_form_current"><i class="ion-pinpoint"></i>Locate Me</span>
                                <span class="input-group-addon log-search-btn"><button>Find Product</button></span> -->
                                <input type="text" id="pac-input" name="search_loc" class="form-control" placeholder="Enter Your Delivery Location" required autofocus> <span class="input-group-addon locate-me-btn my_map_form_current"> <i class="ion-pinpoint"> </i>Locate Me</span> <span class="input-group-addon log-search-btn"> <button>Find Product</button> </span>
                            </div>   
                        </div>


                            <input type="hidden" id="latitude" name="latitude" value="{{ old('latitude') }}" readonly >

                            <input type="hidden" id="longitude" name="longitude" value="{{ old('longitude') }}" readonly >
                            
                            <div id="my_map" style="height:100px;width:100px;display: none;"></div>   
                    </form>

                    <form action="{{url('restaurants')}}" id="my_map_form_current" >
                            
                            <input type="hidden" id="pac-input_cur" class="form-control search-loc-form" placeholder="Search for area,street name..." name="search_loc" value="{{ old('latitude') }}">

                            <input type="hidden" id="latitude_cur" name="latitude" value="{{ old('latitude') }}" readonly >

                            <input type="hidden" id="longitude_cur" name="longitude" value="{{ old('longitude') }}" readonly >
                    </form>

                <!-- Location Form Ends -->

                                <div class="log-location-places"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

       

    <!-- Overview Section Start -->
<!--     <div class="foot-places-outer p-80">
        <div class="container">

            <div class="section-title text-center mab-50 ">
               <p class="homepagefont">A modern eCommerce software <br> for grocery shopping and delivery needs</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6 mab-30 ">
                    <img src="{{asset('assets/user/overview/grocery-ecommerce-software.png')}}" height="50" class="mt-1 mb-3" alt="grocery ecommerce software">
                    <h3>Your own system</h3>
                    <p class="fstyle">Take control of online grocery ordering system &amp; manage the workflow of orders, deliveries &amp; inventories with access to open source script.</p>
                </div>

                <div class="col-lg-4 col-sm-6 mab-30">
                    <img src="{{asset('assets/user/overview/multi-vendor-grocery-script.png')}}" height="50" class="mt-1 mb-3" alt="multi vendor grocery script">
                    <h3>Customizable</h3>
                    <p class="fstyle">We understand the need &amp; personalize our grocery delivery software to fit with your retail business. Get a white label bespoke application.</p>
                </div>

                <div class="col-lg-4 col-sm-6 mab-30">
                    <img src="{{asset('assets/user/overview/online-grocery-shopping-software.png')}}" height="50" class="mt-1 mb-3" alt="online grocery shopping software">
                    <h3>Go Mobile</h3>
                    <p class="fstyle">Delight your customers with android &amp; iOS mobile apps for efficient grocery shopping &amp; delivery. Create an amazing mobile experience!</p>
                </div>

                <div class="col-lg-4 col-sm-6 mab-30">
                    <img src="{{asset('assets/user/overview/grocery-store-software.png')}}" height="50" class="mt-1 mb-3" alt="grocery store software">
                    <h3>Unlimited Stores</h3>
                    <p class="fstyle">Our grocery eCommerce software empowers to add &amp; manage multiple stores. Get access to order history beyond the location.</p>
                </div>

                <div class="col-lg-4 col-sm-6 mab-30">
                    <img src="{{asset('assets/user/overview/grocery-delivery-platform.png')}}" height="50" class="mt-1 mb-3" alt="grocery delivery platform">
                    <h3>Manage everything</h3>
                    <p class="fstyle">Our online grocery delivery platform lets you manage everything under one roof. Get real-time data about payments, inventory &amp; deliveries.</p>
                </div>

                <div class="col-lg-4 col-sm-6 mab-30">
                    <img src="{{asset('assets/user/overview/free-support.png')}}" height="50" class="mt-1 mb-3" alt="free support">
                    <h3>Free Support</h3>
                    <p class="fstyle">We prioritize requests &amp; resolve the issue much faster to help your business. Shopurgrocery offers 24/5 support to our valuable customers.</p>
                </div> -->
           <!--  </div>  --><!-- /row-->
        <!-- </div> --> <!-- /container-->
     <!-- </div> --> <!--foot-places-outer-->

    <!-- Overview Section End -->


            
<!-- How it works Section start -->

    <section class="how_works">
        <div class="log-location">
         <!-- <div class="log-loc-content"> -->
           <div class="col-sm-6 pull-right">
                <h2 class="head wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;text-align: center;">E-Commerce software
for grocery shopping and delivery needs</h2>
                    <ul class="reset" style="list-style-type:none;">
                    <li data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                            
                            <i class="fi pin5 wow zoomIn" style="visibility: visible; animation-name: zoomIn;"></i>
                                                <h3 class="feature-tit">Your own system</h3>
                        <p class="feature-txt">Manage the workflow of orders, deliveries & inventories with access to open source script</p>
                    </li>
                    <li data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: fadeInUp; text-align: center;">
                            
                               
                            <i class="fi food2 wow zoomIn" style="visibility: visible; animation-name: zoomIn;"></i>
                                                    
                        <h3 class="feature-tit">Customizable</h3>
                        <p class="feature-txt">Our grocery delivery software to fit with your retail business.Get a white label bespoke application.</p>
                    </li>
                    <li data-wow-duration="1.8s" style="visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">
                            
                            <i class="fi credit-card wow zoomIn" style="visibility: visible; animation-name: zoomIn;"></i>
                                                <h3 class="feature-tit">Unlimited Stores</h3>
                        <p class="feature-txt">Our grocery eCommerce software empowers to add & manage multiple stores.</p>
                    </li>
                    <li data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
                            
                            <i class="fi food1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;"></i>
                            
                        <h3 class="feature-tit">Manage everything</h3>
                        <p class="feature-txt">Lets you manage everything. Get real-time data about payments, inventory & deliveries.</p>
                    </li>
                </ul>

            </div>
            <div class="login-content-left col-md-6 col-sm-6 col-xs-6 p-0">
                    <div class="login-right-img background-image-img" style="background-image: url({{ asset('assets/user/img/gro-banner.jpg')}});">
                     </div>
                 </div>
        <!-- </div>-->
    </div>
    </section>
                          
<!-- How it works Section End -->

    <!-- Download Section Starts -->
                <div class="download-section">
                    <div class="container">
                        <!-- Download Section Left Starts -->
                        <div class="download-sec-left col-md-5 col-sm-12 col-xs-12">
                            <div class="download-sec-left-inner">
                                <h2 class="download-tit">Grocery in your pocket</h2>
                                <p class="download-txt">Order Online Grocery Shopping & track on the go, with the all-new Grocery app.</p>
                                <div>
                                    <a href="{{Setting::get('ANDROID_APP_LINK')}}" class="download-img"><img src="{{ asset('assets/user/img/android.png')}}"></a>
                                    <a href="{{Setting::get('IOS_APP_LINK')}}" class="download-img"><img src="{{ asset('assets/user/img/play-store.png')}}"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Download Section Left Ends -->
                        <!-- Download Section Right Starts -->
                        <div class="download-sec-right col-md-7 col-sm-12 col-xs-12">
                            <div class="row">
                                <!-- <div class="app-screen-left col-md-6 col-sm-6 col-xs-12"> -->
                                    <div class="app-screen app-screen-1 bg-img" style="background-image: url({{ asset('assets/user/img/home-app-screen.png')}});"></div>
                                <!-- </div>
                                <div class="app-screen-right col-md-6 col-sm-6 col-xs-12">
                                    <div class="app-screen app-screen-2 bg-img" style="background-image: url({{ asset('assets/user/img/app-screen-2.png')}});"></div>
                                </div> -->
                            </div>
                        </div>
                        <!-- Download Section Right Ends -->
                    </div>
                </div>
                <!-- Download Section Ends -->

    <!-- Feature Section Starts -->
                <div class="feature-section p-80">
                    <div class="container">
                            <div class="section-title text-center mab-50 ">
                                <h2>How does it work?</h2>
                            </div>
                        <div class="feature-sec-inner row">
                            
                            <!-- Feature Block Starts -->
                            <div class="feature-block col-md-4 col-sm-4 col-xs-12">
                                <img src="{{ asset('assets/user/img/stores.png')}}" class="feature-img">
                                <h4 class="feature-tit">Never worry about local stores</h4>
                                <p class="feature-txt">Enter location and Start ordering items from selected or nearby store.</p>
                            </div>
                            <!-- Feature Block Ends -->
                            <!-- Feature Block Starts -->
                            <div class="feature-block col-md-4 col-sm-4 col-xs-12">
                                <img src="{{ asset('assets/user/img/Shop-smartly.png')}}" class="feature-img">
                                <h4 class="feature-tit">Shop smartly without hardwork</h4>
                                <p class="feature-txt">We provide healthy and fresh items. Each week we refill your suplly.</p>
                            </div>
                            <!-- Feature Block Ends -->
                            <!-- Feature Block Starts -->
                            <div class="feature-block col-md-4 col-sm-4 col-xs-12">
                                <img src="{{ asset('assets/user/img/doorstep.png')}}" class="feature-img">
                                <h4 class="feature-tit">Get grocery at doorstep on time</h4>
                                <p class="feature-txt">No delay and grocery delivered directly to your kitchen counter</p>
                            </div>
                            <!-- Feature Block Ends -->
                        </div>
                    </div>
                </div>
    <!-- Features Section Ends -->




<!-- Buy Grocery Section Start -->
    <div class="container-fluid bg-grey">
      <div class="row">
        <div class="download-sec-left col-md-5 col-sm-12 col-xs-12">
         <!--  <span class="glyphicon glyphicon-globe logo slideanim"></span> -->
         <img src="{{asset('assets/user/img/grocery-shopping.jpg')}}"></i>
        </div>
        <div class="download-sec-right col-md-7 col-sm-12 col-xs-12">
          <h2>Buy Groceries Online!</h2><br>
            <h5>Save time and avoid the line!</h5><br>
          <h6 style="font-size: 17px">Our premium online grocery shopping service that has been shipping groceries throughout the world. We meticulously hand-package each order using pristine new</h6>
        </div>
        <button type="submit" class="btn-green"><a href="{{url('http://localhost/grocery/public/')}}">Contact Us</a></button>
      </div>
    </div>
<!-- Buy Grocery Section Ends -->  

                

<!-- Newsletter Section Start -->  
<div class="foot-places-outer">
    <div class="container">
        <div class="foot-places">
        
            <section class="subscribe">
    <div class="container pad0">
        <div class="col-xs-4">
            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Newsletter Subscribe:</h3>

            <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Don't miss out on our great offers.</p>
        </div>
    <div class="col-xs-8">

            <form action="store" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    

                
                    <label for="name" class="firstlable">

                <div class="form-group">
                    <div class=" input-group" data-left="">
                    <span class="input-group-addon user-o"><i class="fa fa-user-o"></i></span>   

                    <input type="text" id="name" class="form-control" name="name" placeholder="Enter Your Name" aria-required="true">

                    <div class="help-block"></div> 
                    </div>
                    </label>
                 </div>    


                <div class="form-group">
                    <label for="email">

                    <div class=" input-group" data-left=""> 
                        <span class="input-group-addon envelope-o"><i class="fa fa-envelope-o"></i></span>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email" aria-required="true">

                        <div class="help-block"></div> 
                    </div> 
                    </label>   
                </div>   
                <button type="submit" class="btn grey">Subscribe</button>
            </form>        
        </div>
    </div>
</section>
        </div>
    </div>
</div>







      
<!-- Newsletter Section End -->     
                        <!-- Frame Modal Bottom -->
             <!--                <div class="modal fade bottom" id="frameModalBottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                              aria-hidden="true"> -->

                         <!-- Add class .modal-frame and then add class .modal-bottom (or other classes from list above) to set a position to the modal -->
<!--                       <div class="modal-dialog modal-frame modal-bottom" role="document">


                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="row d-flex justify-content-center align-items-center">

                              <p class="pt-3 pr-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nisi quo
                                provident fugiat reprehenderit nostrum
                                quos..
                              </p>

                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <!-- Frame Modal Bottom -->

            
            <!-- Footer Starts -->
           @include('user.layouts.partials.footer')
            <!-- Footer Ends -->

            <!-- Login Warapper Ends -->
        
        <script src="{{ asset('assets/user/js/jquery.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/user/js/bootstrap.min.js')}}"></script>
        <!-- Slick Slider JS -->
        <script src="{{ asset('assets/user/js/slick.min.js')}}"></script>
        <!-- Sidebar JS -->
        <script src="{{ asset('assets/user/js/asidebar.jquery.js')}}"></script>
        <!-- Map JS -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC808NpIO-MZ_C-nXv21zGFDKC1OUm_MkQ"></script>
        <script src="{{ asset('assets/user/js/jquery.googlemap.js')}}"></script>
        <!-- Incrementing JS -->
        <script src="{{ asset('assets/user/js/incrementing.js')}}"></script>
        <!-- Scripts -->
        <script src="{{ asset('assets/user/js/scripts.js')}}"></script>
        @include('user.layouts.partials.script')
        <!-- Start of LiveChat (www.livechatinc.com) code -->
             <!-- <script type="text/javascript">
                  window.__lc = window.__lc || {};
                  window.__lc.license = 8256261;
                  (function() {
                      var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
                      lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
                  })();
              </script> -->
              <!-- End of LiveChat code -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
                 <!--  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113150309-2"></script>
                  <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());

                    gtag('config', 'UA-113150309-2');
       
                 </script>   -->

</body>
</html>