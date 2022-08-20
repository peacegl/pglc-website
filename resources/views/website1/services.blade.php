@extends('website1.layout.main')
@section('title','Service detail')
@section('javascript')
 <script type="text/javascript">
     $(document).ready(function(){
        $('#service').addClass('active');
     });
 </script>
 @stop
 @section('content')
 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{asset('upload/service/servicebg.jpg')}});  -ms-transform: translateY(-30%);
  transform: translateY(-30%); ">
        <div class="container" style="height: 30px;">
            <div class="row" >
                <div class="col-lg-12 col-md-12">
                    <h1>Our Services</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('airewin_shipping_line')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-area bottom-less" style="padding-bottom: 5%;">
        <div class="container">
             <div class=" col-md-4 col-lg-4">
                <img src="{{asset('upload/service/'.$serviceDetail->image)}}">
            </div>
            <div class="col-md-8 col-lg-8 col-sm-12">
               <h2>{{$serviceDetail->title_en}}</h2>
               <p><?=$serviceDetail->description_en?></p>
           </div>
        </div>
    </div>
    <!-- End Services -->
    @stop