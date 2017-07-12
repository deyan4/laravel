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
use App\User;

Route::get('/', 'HomeController@home');

Route::post('/','HomeController@login');

Route::resource('/user','UserController');

Route::get('/logout', 'HomeController@logout');

Route::get('/test', function (){
  $all = User::where('email','=','deyan4@gmail.com')->get();
  foreach ($all as $user) {
    echo $user->id . '<br>';
  }

});
