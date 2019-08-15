<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasedUmur extends Model
{
    public function umur(){
    	return $this->belongsTo('App\Umur');
    }
    public function rukun_tetanggas(){
    	return $this->belongsTo('App\RukunTetangga','rukun_tetangga_id');
    }
}
