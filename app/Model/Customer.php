<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customers';

    function getCustomer(){
    	return $this->paginate(10);
    }
    
    function allCustomer(){
    	return $this->get();
    }
}
