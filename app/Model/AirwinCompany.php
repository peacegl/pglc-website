<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AirwinCompany extends Model
{
    protected $table='airwin_company';


	public function getCompany()
	{
		return $this->first();

	 }
}
