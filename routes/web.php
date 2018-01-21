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
    return view('welcome');
});

Auth::routes();
 Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/tes1', ''function () {
//     return view('test1');
// });

//Route::get('/tes2', function () {
//		return view('test2');
//});

// Route::get('/tes3', function () {
//     return view('test3');
// });

Route::get('/tes1', 'LatihanController@index1');

Route::get('/tes2', 'PramukaController@index2');

Route::get('/tes3', 'LatihanController@index3');

Route::get('/tes4', 'LatihanController@index4');

Route::get('/tes5', 'LatihanController@index5');

