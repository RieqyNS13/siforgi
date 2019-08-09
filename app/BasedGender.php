<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasedGender extends Model
{
	protected $guarded = ['created_at','updated_at'];

	// public function dusun(){
	// 	return $this->belongsTo('App\Dusun');
	// }
}
