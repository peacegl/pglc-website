<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AirwinService extends Model
{
    protected $table='airwin_services';

    function getService(){
    	return $this->get();
    }
    function getNoImageService(){
    	return $this->whereNull('image')->get();
    }
    function serviceDetail($id){
    	return $this->where('id',$id)->first();
    }
}
