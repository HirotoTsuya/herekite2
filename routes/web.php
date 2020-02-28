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


use Illuminate\Http\Request;

Auth::routes(['verify' => true]);

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/layaut', function () {
    return view('layaut');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/windinfo', function(){
   return view('windinfo/windinfo');
});

Route::get('/windinfospot/{name}', 'WindinfospotController@index')
    ->middleware('auth');

Route::post('/windinfospot/{name}/button','WindinfospotController@spot_name');


//プロフィール写真
Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'ProfileController@index');
    Route::post('/profile', 'ProfileController@store');
});


?>


