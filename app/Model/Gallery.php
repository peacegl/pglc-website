<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table='galleries';

    function getGallery(){
    	return $this->orderBy('category')->paginate(20);
    }
}
