<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AirwinSlider extends Model
{
    protected $table='airwin_slideshows';
    function getSlider()
    {
    	return $this->orderBy('id','desc')->get();
    }
}
