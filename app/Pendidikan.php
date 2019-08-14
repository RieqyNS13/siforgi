<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    public function based_pendidikans(){
    	return $this->hasMany('App\BasedPendidikan');
    }
}
