<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    public function locations(){
    	return $this->hasMany('App\Location');
    }
}
