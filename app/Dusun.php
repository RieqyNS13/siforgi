<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    protected $guarded = ['created_at','updated_at'];

    public function based_genders(){
    	return $this->hasMany('App\BasedGender');
    }
}
