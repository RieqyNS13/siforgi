<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    protected $guarded = ['created_at','updated_at'];

    public function rukun_tetanggas(){
    	return $this->hasMany('App\RukunTetangga');
    }
}
