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
Route::get('/dataPendudukByPendidikan', "BasedPendidikanController@dataPendudukByPendidikan");
Route::get('/dataPendudukByUmur', "BasedUmurController@dataPendudukByUmur");
Route::get('/piramidaPenduduk/{dusun_id?}', 'BasedUmurController@piramidaPenduduk');
Route::get('/test', function(){
	dd(collect(["L"=>[], "P"=>[]]));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
