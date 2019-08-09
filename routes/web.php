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
Route::get('/dataPenduduk', "BasedGenderController@dataPenduduk");
Route::get('/dataPendudukByGender',"BasedGenderController@dataPendudukByGender");
Route::get('/test', function(){
	$test = App\Dusun::with('rukun_tetanggas.based_genders')->get();
	return $test;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
