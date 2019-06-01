<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'account_city';
    public $timestamps = false;

    /*
    *	City relationship
    */
    public function city()
    {
    	return $this -> hasMany('App\Orders', 'city', 'id');
    }
}
