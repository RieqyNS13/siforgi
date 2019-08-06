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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/test', function(){
	$kadus = \App\Kadus::get();
	echo $kadus[$kadus->search(function($item, $key){
                return $item->name=="Rokhamin";

            })]->id;
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
