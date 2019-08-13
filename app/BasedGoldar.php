<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasedGoldar extends Model
{
	public function goldar(){
    	return $this->belongsTo('App\Goldar');
    }
}
