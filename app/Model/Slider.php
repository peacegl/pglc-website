<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table='slideshows';


    function getSlider()
    {
    	return $this->get();
    }
}
