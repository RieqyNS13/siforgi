<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasedPendidikan extends Model
{
    public function pendidikan(){
    	return $this->belongsTo('App\Pendidikan');
    }
}
