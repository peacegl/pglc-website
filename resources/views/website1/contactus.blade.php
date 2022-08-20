
@extends('website1.layout.main')
 @section('title','Contact us')
@section('javascript')
 <script type="text/javascript">
     $(document).ready(function(){
        $('#contact').addClass('active');
     });
 </script>
 @stop
 @section('content')
 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{asset('upload/background/contact.jpg')}});-ms-transform: translateY(-30%);
  transform: translateY(-30%); ">
        <div class="container" style="height: 30px;">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('airewin_shipping_line')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- contact us section -->
<div class="contact-area" style="padding-bottom: 5%;">
        <div class="container">
            <div class="row">
                <div class="contact-items bg-contain" style="background-image: url(assets/img/map.svg);">
                    <div class="col-md-4 address" >
                        <div class="address-items" style="background-color: #fafafa;">
                            <ul class="info">
                                <li >
                                    <h4 style="background-color: #08c; padding-top: 5px; padding-left: 5px;">CORPORATE OFFICE</h4>
                                    <div class="icon"> &nbsp;&nbsp;
                                        <i class="fas fa-map-marker" style="font-size: 25px;margin-left: 10px;"></i></div> 
                                    <span ><b>Address:</b> <br>{{$company->address_en}}</span>
                                </li>
                                <!--<li>-->
                                <!--    <div class="icon"> &nbsp;&nbsp;-->
                                <!--        <i class="fas fa-phone" style="font-size: 25px;margin-left: 3px;"></i></div> -->
                                <!--    <span> <b>Telephone No:</b> <br> +971 4 8838756</span>-->
                                <!--</li>-->
                                 <li>
                                    <div class="icon"> &nbsp;&nbsp;
                                        <i class="fas fa-phone" style="font-size: 25px;margin-left: 3px;"></i></div> 
                                    <span> <b>Mobile No:</b> <br>{{$company->phone}}</span>
                                </li>
                                <li>
                                    <div class="icon"> &nbsp;&nbsp;
                                        <i class="fas fa-envelope-open" style="font-size: 25px;margin-left: 3px;"></i> </div>
                                    <span> <b>Email:</b> <br>{{$company->email}}</span>
                                </li>
                                <br>
                            </ul>
                        </div>
                    </div>
                        </div>
            </div>
        </div>
    </div>
    <!-- start google map -->
    <div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7214.687538016754!2d55.396560874315455!3d25.29265173577224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%20AL%20Qusais%20Industrial%20Area%204%20%2CAl%20Saoud%20Building%20Room%20Number%20804!5e0!3m2!1sen!2sus!4v1617519643120!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
   @stop