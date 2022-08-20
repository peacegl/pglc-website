<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table='careers';

    function getCareer(){
    	return $this->paginate(20);
    }
}
