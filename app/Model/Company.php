<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table='company';


	public function getCompany()
	{
		return $this->first();

	 }

}