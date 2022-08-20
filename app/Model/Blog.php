<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table='blogs';

    function getBlog()
    {
    	return $this->orderBy('id','desc')->paginate(10);
    }

    function latestBlog()
    {
    	return $this->orderBy('id','desc')->paginate(3);
    }
    function blogDetail($id){
    	return $this->where('id',$id)->first();
    }
}
