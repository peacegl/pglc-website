<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $table='contacts';
    function index($status='')
    {
    	return $this->where('status',$status)->orderBy('id','desc')->paginate(20);
    }
}
