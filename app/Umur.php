<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umur extends Model
{
     public function based_umurs(){
    	return $this->hasMany('App\BasedUmur');
    }
}
