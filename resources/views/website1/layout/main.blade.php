<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememine.net/themeforest/buspro/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 06:43:02 GMT -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Peace global logistic">

    <!-- ========== Page Title ========== -->
    <title>@yield('title') - P G L C SHIPPING LLC</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/css/bootsnav1.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/css/style1.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/responsive.css')}}" rel="stylesheet" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet"> -->

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
   <!--  <div class="top-bar-area bg-dark one-line text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map"></i> California, TX 70240
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i> Info@gmail.com
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> +123 456 7890
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="link text-right col-md-4">
                    <a href="#">Register</a>
                    <a href="#">Login</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav col-md-1 col-lg-1">
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('assets/images/logo.png')}}" class="logo" alt="Logo" style="height:45px">
                        P G L C SHIPPING LLC
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li id="homes">
                            <a href="{{url('/')}}">Home</a>
                        </li>

                        <li id="cars">
                            <a href="{{url('cars')}}">Buy Cars</a>
                        </li>
                       
                        <li class="dropdown" id="service">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Services</a>
                            <ul class="dropdown-menu">
                                @foreach ($service as $key => $value)  
                                <li><a href="{{url('airwin_service_detail/'.$value->id)}}">{{$value->title_en}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                         <li id="aboutus">
                            <a href="{{url('airwin_about_us')}}">About us</a>
                        </li>
                       
                        <li id="contact">
                            <a href="{{url('airwin_contact_us')}}">contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    @yield('content')
    
    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark">
        <!-- Start Footer Top -->
        <!-- End Footer Top -->
        <div class="container">
            <div class="row">
                <div class="f-items" style="padding-top: 3%; padding-bottom: 1%;">

                    <!-- Single Item -->
                    <div class="col-md-4 equal-height item">
                        <div class="f-item">
                            <h4>About us</h4>
                            <p>
                                <?=substr($company->about_en,0,200)?>
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height item">
                        <div class="f-item recent-post">
                            <h4>&nbsp;&nbsp;&nbsp;Contact Us</h4>
                            <ul>
                                <li>
                                    <div class="info">
                                         
                                        <div class="meta-title">
                                            <i class="fa fa-phone"></i> &nbsp;<?=$company->phone?>
                                        </div>
                                       <div class="meta-title">
                                            <i class="fa fa-phone"></i> &nbsp;<?=$company->email?>
                                        </div>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height item">
                        <div class="f-item recent-post">
                            <h4> &nbsp;&nbsp;&nbsp;OPENING HOURS</h4>
                            <ul>
                                <li>
                                    <div class="info">
                                         
                                        <div class="meta-title">
                                            Sun to Thu: 08:00AM to 05:30PM
                                        </div>
                                       <div class="meta-title">
                                             Friday : Closed
                                        </div>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2020. All Rights Reserved by <a href="#">PGLC SHIPPING LLC</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
   <script src="{{asset('asset/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/equal-height.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.appear.js')}}"></script>
    @yield('javascript')
    <script src="{{asset('asset/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('asset/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/js/wow.min.js')}}"></script>
    <script src="{{asset('asset/js/progress-bar.min.js')}}"></script>
    <script src="{{asset('asset/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('asset/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('asset/js/count-to.js')}}"></script>
    <script src="{{asset('asset/js/YTPlayer.min.js')}}"></script>
    <script src="{{asset('asset/js/bootsnav.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>


        <!-- chat bot whatsapp to Faisal whatsapp -->
        <script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?92638';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"Message Us",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"Peace Global Logistics",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"https://cdn.clare.ai/wati/images/WATI_logo_square_2.png",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"971565929272"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
</body>


<!-- Mirrored from thememine.net/themeforest/buspro/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 06:44:34 GMT -->
</html>