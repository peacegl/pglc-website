<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AirwinContactus extends Model
{
    protected $table='airwin_contacts';
    function index($status='')
    {
    	return $this->where('status',$status)->orderBy('id','desc')->paginate(20);
    }
}
