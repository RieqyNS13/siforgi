<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});
Route::get('/carousel', function(){
	return App\carousel::get();
});
Route::get('/test', function(){
	$get=App\Dusun::get();
    $dusuns = ["Karanglo"=>[1,2,3,4,5,6,7],"Jurang"=>[1,2,3,4],"Kenteng"=>[1,2,3,4],"Gelaran"=>[1,2,3,4],"Clowok"=>[1,2],"Ampelgading"=>[1,2,3,4,5,6],"Golak"=>[1,2,3]];
    foreach($dusuns as $k=>$v){
    	$dusun_id = $get[$get->search(function($item, $key)use($k){
    		return $item->name==$k;
    	})];
    	$data[] = ['dusun_id'=>$dusun_id->id];
    }
    print_r($data);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
