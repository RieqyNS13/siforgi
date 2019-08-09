<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    public function based_agamas(){
    	return $this->hasMany('App\BasedAgama');
    }
}
