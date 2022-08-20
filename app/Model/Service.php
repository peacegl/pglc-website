<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table='services';

    function getService(){
    	return $this->get();
    }
    function serviceDetail($id){
    	return $this->where('id',$id)->first();
    }
}
