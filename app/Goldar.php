<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goldar extends Model
{
	protected $guarded = ['created_at','updated_at'];
	
    public function based_goldars(){
    	return $this->hasMany('App\BasedGoldar');
    }
}
