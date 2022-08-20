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

                <div class="item active bg-cover" style="background-image: url({{asset('/upload/slider/car/'.$slid->image)}});">
                @else
                <div class="item  bg-cover" style="background-image: url({{asset('/upload/slider/car/'.$slid->image)}});">
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
                <div class="item bg-cover" style="background-image: url({{asset('upload/slider/car/'.$slid->image)}});">
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
                        <h3 style="font-size: 30px;">PGL Cars Services</h3>
                        <p>
                        At PGL Car business, we offer a full range of 
                        services, including a computer lab in our office 
                        to help you buy cars, auction account to bid from,
                        freight forwarding services worldwide, customized to meet your requirements. As members of an extensive network of global shipping agents, we have the resources necessary to move your merchandise at a competitive rate, even when deadlines are tight or logistics are complex.
                        </p>
                    </div>
                </div>
                <!-- Start Our Features -->
                <div class="features-items text-center">
                    <!-- Single Item -->
                    
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="item">
                            <div class="icon">
                               <i class="fa fa-desktop"></i>
                            </div>

                            <div class="info">
                                <h4 style="font-weight: normal;">Dedicated Computer Labs with Auction accounts</h4>
                                <p>
                                    We have dedicated computer labs in our office location with auction account so you can bid from without the complication of figuring out the complex regulations regarding it. You can bid on your dream cars from USA and we will take care of the shipping, handling, custom clearning, and towing!
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Second -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="item">
                             <div class="icon">
                                 <i class="fa fa-car"></i>
                            </div>
                            <div class="info">
                                <h4 style="font-weight: normal;">PGL Used Cars</h4>
                                <p>
                                    You may also buy used cars in our Lot ranging from different vehicles. We buy cars from USA and ship it ourselves ready to be picked up by our customers in our yard!
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- third -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-ship"></i>
                            </div>
                            <div class="info">
                                <h4 style="font-weight: normal;">Shipping</h4>
                                <p>
                                    Peace Global Logistics is also a licensed freight forwarder working with internation shipping lines to help our customers in their shipping needs from towing, loading, and shipping worldwide. Not only that, but PGL will also take care of clearance at customs and other regulatory requirements.
                                </p>
                            </div>
                        </div>
                    </div>


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
               <p>With professional and stream lined process we make your shipment quick and reliable.</p>
            </div>
         </div>
      </div>
      <div class="process-row">
         <div class="process-step sterp1">
            <div class="process-icon">
              <span>1</span>
              <img src="{{asset('upload/icon/process-icon1.png')}}" alt="">
            </div>
            <p>Purchase Car</p>
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
    


    @stop
