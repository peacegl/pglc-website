<?php

namespace App\Http\Controllers;

use App\model\Company;
// use App\model\AirwinCompany;
use App\model\Slider;
// use App\model\Airwinslider;
use App\model\Service;
// use App\model\AirwinService;
use App\model\Blog;
// use App\model\Customer;
use App\model\Contactus;
// use App\model\AirwinContactus;
use App\model\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use DB;

class ViewController extends Controller
{    
    // airwin shipping llc section 

    function airewin_shipping_line(){
        // $company=$this->airwincompany->getCompany();
        // $slider=$this->airwinslider->getSlider();
        // $service=$this->airwinservice->getService();
        // $noimageservice=$this->airwinservice->getNoImageService();
         $company=DB::table('airwin_company')->first();
         $slider=DB::table('cars_slideshows')->orderBy('id','desc')->get();
         $service=DB::table('airwin_services')->where('image','!=','')->get();
         $noimageservice=DB::table('airwin_services')->whereNull('image')->get();
        return view('website1.index')->with(['company'=>$company,'slider'=>$slider,'service'=>$service,'noimageservice'=>$noimageservice]);
    }

    function cars(){
        // $company=$this->airwincompany->getCompany();
        // $slider=$this->airwinslider->getSlider();
        // $service=$this->airwinservice->getService();
        // $noimageservice=$this->airwinservice->getNoImageService();
         $company=DB::table('airwin_company')->first();
         $slider=DB::table('airwin_slideshows')->orderBy('id','asc')->get();
         $service=DB::table('airwin_services')->where('image','!=','')->get();
         $noimageservice=DB::table('airwin_services')->whereNull('image')->get();
        return view('website1.cars')->with(['company'=>$company,'slider'=>$slider,'service'=>$service,'noimageservice'=>$noimageservice]);
    }

    function airwin_contact_us(){
        // $company=$this->airwincompany->getCompany();
        // $service=$this->airwinservice->getService();
        $company=DB::table('airwin_company')->first();
        $service=DB::table('airwin_services')->where('image','!=','')->get();
        return view('website1.contactus')->with(['company'=>$company,'service'=>$service]);
    }

    function airwin_sendMessage(Request $request){
        $data = $request->all();

        $rules = array(
            'full_name' => 'required', 
            'email' => 'required|email', 
            'message' => 'required', 
        );
        $validation=Validator::make($data,$rules);
        if($validation->fails()){
            return Redirect::back()->withErrors($validation);
        }

        // $this->airwincontact->name=$request['full_name'];
        // $this->airwincontact->email=$request['email'];
        // $this->airwincontact->phone=$request['phone'];
        // $this->airwincontact->subject=$request['company'];
        // $this->airwincontact->description=$request['message'];
        if(DB::table('airwin_contacts')->insert([
            'name'=>$request['full_name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'subject'=>$request['company'],
            'description'=>$request['message']
        ])){
        return Redirect::back()->with('success','Message  successfully send !');
        }
        else{
            return Redirect::back()->with('error','Message  Note  send!');
        }
    }

    function airwin_serviceDetail($id=0){
        // $company=$this->airwincompany->getCompany();
         // $service=$this->airwinservice->getService();
         // $serviceDetail=$this->airwinservice->serviceDetail($id);
        $company=DB::table('airwin_company')->first();
        $service=DB::table('airwin_services')->where('image','!=','')->get();
        $serviceDetail=DB::table('airwin_services')->where('id',$id)->first();
       
        return view('website1.services')->with(['service'=>$service,'company'=>$company,'serviceDetail'=>$serviceDetail]);
    }

    function airwin_about_us(){
       return Redirect::route('airewin_shipping_line',['#airwin_aboutus']);
    }

}

