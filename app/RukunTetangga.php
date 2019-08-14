<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RukunTetangga extends Model
{
    public function dusun(){
    	return $this->belongsTo('App\Dusun');
    }
    public function based_genders(){
    	return $this->hasMany('App\BasedGender');
    }
    public function based_goldars(){
    	return $this->hasMany('App\BasedGoldar');
    }
    public function based_pendidikans(){
    	return $this->hasMany('App\BasedPendidikan');
    }
}
