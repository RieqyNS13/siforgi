<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded = ['created_at','updated_at'];

    public function dusun(){
    	return $this->belongsTo('App\Dusun');
    }
     public function jenis(){
    	return $this->belongsTo('App\Jenis');
    }
}
