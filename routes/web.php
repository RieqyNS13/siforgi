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
	return App\Carousel::get();
});
Route::get('/dataPenduduk', "BasedGenderController@dataPenduduk");
Route::get('/dataPendudukByGender',"BasedGenderController@dataPendudukByGender");
Route::get('/dataPendudukByAgama', "BasedAgamaController@dataPendudukByAgama");
Route::get('/dataPendudukByGoldar', "BasedGoldarController@dataPendudukByGoldar");
Route::get('/test', function(){
	$data = App\Goldar::with('based_goldars')->get();
	foreach($data as $key=>$value){
		$total = ['L'=>0,'P'=>0];
		foreach ($value->based_goldars as $key2 => $value2) {
			if($value2->gender=="L")$total['L'] += $value2->jumlah;
			else $total['P'] += $value2->jumlah;
		}
		$data[$key]->jumlah = $total;
	}
	return $data;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
