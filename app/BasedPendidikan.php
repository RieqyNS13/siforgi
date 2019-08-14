<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasedPendidikan extends Model
{
    public function pendidikan(){
    	return $this->belongsTo('App\Pendidikan');
    }
    public function rukun_tetanggas(){
    	return $this->belongsTo('App\RukunTetangga','rukun_tetangga_id');
    }
}
