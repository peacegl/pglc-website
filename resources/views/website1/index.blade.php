 @extends('website1.layout.main')
 @section('title','Home')
 @section('javascript')
 <script type="text/javascript">
     $(document).ready(function(){
        $('#homes').addClass('active');
     });
 </script>
 @stop
 <style type="text/css">
     .service-process {
    background-color: #fafafa;
    position: relative;
}

.wshipping-content-block {
    padding: 80px 0px;
    background-color: #fff;
}
.process-row {
    padding-top: 40px;
    display: flex;
}
.process-step {
    margin-right: 14%;
    position: relative;
}
.process-icon {
    width: 154px;
    text-align: center;
    height: 154px;
    float: left;
    border-radius: 20%;
    background-color: #fff;
    border: 2px solid #406a80;
    position: relative;
    padding-top: 35px;
    margin-bottom: 10px;
}
.process-icon img{
    height: 86px;
}
.process-icon span {
    width: 56px;
    height: 56px;
    background-color: #406a80;
    border: 2px solid #08c;
    color: #fff;
    line-height: 56px;
    font-size: 28px;
    position: absolute;
    left: -30px;
    top: 50%;
    margin-top: -30px;
    border-radius: 100%;
    font-weight: 700;
}
.process-step p {
    text-transform: uppercase;
    width: 100%;
    text-align: center;
    margin-top: 10px;
    clear: both;
}
.process-step:before {
    position: absolute;
    right: -123px;
    width: 110px;
    height: 2px;
    background-color: #08c;
    content: "";
    top: 80px;
    display: block;
}
.process-step:last-child:before{
    background-color:#fafafa;
}
.process-step:last-child {
    margin-right: 0px !important;

}
.process-step {
    margin-right: 14%;
    position: relative;
}

@media (min-width: 768px)
.container {
    width: 720px;
    max-width: 100%;
}
@media only screen and (max-width: 991px)
.process-row {
    padding-left: 0px;
}
 </style>
 @section('content')
    
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area" style="height: 75% !important;">
        <div id="bootcarousel" class="carousel slide text-light heading-uppercase animate_text" data-ride="carousel" >
            <!-- Wrapper for slides -->
            <div class="carousel-inner" >
                @foreach($slider as $key => $slid)
                @if($key%2==0)
                @if($key==0)

                <div class="item active bg-cover" style="background-image: url({{asset('/upload/slider/'.$slid->image)}});">
                @else
                <div class="item  bg-cover" style="background-image: url({{asset('/upload/slider/'.$slid->image)}});">
                @endif
                    <div class="box-table" >
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content text-center">
                                            <h1 data-animation="animated slideInDown">{{$slid->title_en}}</h1>
                                            <p data-animation="animated slideInUp">
                                                {{$slid->description_en}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="item bg-cover" style="background-image: url({{asset('upload/slider/'.$slid->image)}});">
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content text-center">
                                            <h1 data-animation="animated slideInDown">{{$slid->title_en}}</h1>
                                            <p data-animation="animated slideInUp">
                                                {{$slid->description_en}}
                                            </p>
                                           <!--  <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">Learn more</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
              @endforeach
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->
    <!-- Start Services 
    ============================================= -->
    <div class="features-area  default-padding bottom-less">
        <div class="container wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="row"> 
                <div class="col-md-6 col-md-offset-3">
                    <div class="site-heading text-center">
                        <h3 style="font-size: 30px;">P G L C SERVICES</h3>
                        <p>
                            <?=$company->info_en?>
                        </p>
                    </div>
                </div>
                <!-- Start Our Features -->
                <div class="features-items text-center">
                    <!-- Single Item -->
                    @foreach($noimageservice as $key => $noimgserve)
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="item">
                            @if($key==0)
                            <div class="icon">
                               <i class="fa fa-ship"></i>
                            </div>
                            @elseif($key==1)
                             <div class="icon">
                                 <i class="fa fa-plane-departure"></i>
                            </div>
                            @else
                            <div class="icon">
                                <i class="fa fa-truck"></i>
                            </div>
                            @endif
                            <div class="info">
                                <h4 style="font-weight: normal;">{{$noimgserve->title_en}}</h4>
                                <p>
                                    <?=$noimgserve->description_en?>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Area -->

     <div class="buspro-product-area text-center bottom-less">
        <div class="container wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="row">
                <div class="product-list">
                    @foreach ($service as $key => $serve) 
                    <!-- Single Item -->
                    <div class="col-md-4 product-single">
                        <div class="item">
                            <div class="product-thumb">
                                <img src="{{asset('upload/service/'.$serve->image)}}" alt="Thumb">
                            </div>
                            <div class="product-content" style="padding: 4% !important;text-align: left;">
                                <h4 style="font-weight: normal;font-size: 18px;">
                                    <a href="{{asset('airwin_service_detail/'.$serve->id)}}">{{$serve->title_en}}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<!-- service process section -->
<div class="wshipping-content-block service-process" style="background-color:#fafafa">
    <div class="container wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
      <div class="row" style="text-align: center;">
         <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3" style="padding-left:5%;padding-right: 5%">
            <div class="section-title">
               <h2>SERVICE PROCESS</h2>
               <p>With proffesional and stream lined process we make your shipment quick and reliable.</p>
            </div>
         </div>
      </div>
      <div class="process-row">
         <div class="process-step sterp1">
            <div class="process-icon">
              <span>1</span>
              <img src="{{asset('upload/icon/process-icon1.png')}}" alt="">
            </div>
            <p>Select Freight</p>
         </div>
         <div class="process-step sterp2">
            <div class="process-icon">
              <span>2</span>
              <img src="{{asset('upload/icon/process-icon2.png')}}" alt="">
            </div>
            <p>Create Invoice</p>
         </div>
         <div class="process-step sterp3">
            <div class="process-icon">
              <span>3</span>
              <img src="{{asset('upload/icon/process-icon3.png')}}" alt="">
            </div>
            <p>Secure Payment</p>
         </div>
         <div class="process-step">
            <div class="process-icon">
              <span>4</span>
              <img src="{{asset('upload/icon/process-icon4.png')}}" alt="">
            </div>
            <p>Fast Delivery</p>
         </div>
      </div>
    </div>
  </div>

<!-- end of service process section -->
     <!-- Start Features
    ============================================= -->
    <div class="top-features-area about-area default-padding" id="airwin_aboutus">
        <div class="container wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="row">
                <div class="col-md-3">
                     <img src="{{asset('upload/generalInfo/'.@$company->aboutus_image)}}" alt="Thumb">
                </div>
                <div class="col-md-5">
                    <h2>ABOUT US</h2>
                    <div class="management-items ">
                        <!-- Single Item -->
                        <div class="item">
                            <p>
                                <?=substr($company->about_en,0,600)?> 
                            </p>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
                <div class="col-md-4 about-list">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-handshake"></i>
                            </div>
                            <div class="info" style="padding-top:20px; padding-left: 5px;">
                                <h5>WE ARE TRUSTED</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-lock"></i>
                            </div>
                            <div class="info" style="padding-top:20px;">
                                <h5>THE BEST SECURITY</h5>
                            </div>
                        </li>
  
                        <li>
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="info" style="padding-top:20px;">
                                <h5>QUICK LOCATION</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->

    @stop
