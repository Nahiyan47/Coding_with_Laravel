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
Route::get('/','pagescontroller@home');
Route::get('/user','projectcontroller@index');
Route::post('/user','projectcontroller@store');
Route::get('/user/create','projectcontroller@create');
Route::get('/user/{user}','projectcontroller@show');
Route::get('/user/{user}/edit','projectcontroller@edit');
Route::patch('/user/{user}','projectcontroller@update');
Route::delete('/user/{user}','projectcontroller@destroy');
Route::patch('/tasks/{task}','projectTaskcontroller@update');
Route::post('/user/{user}/tasks','projectTaskcontroller@store');

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');

Route::get('/validation','ValidationController@showform');
Route::post('/validation','ValidationController@validateform');
 
Route::get('ajax',function() {
   return view('message');
});
Route::post('/getmsg','AjaxController@index');

Route::get('/dynamic_dependent','DynamicDependent@index');
Route::post('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');
Route::post('dynamic_dependent/fetchstate', 'DynamicDependent@fetchstate');

Route::get('/flight', 'flightController@index');

Route::get('/flight/create','flightController@create');
Route::post('/flight','flightController@store');
Route::delete('/flight/{flight}','flightController@destroy');

Route::get('/flight/{id}/code','flightController@show');

Route::get('/flight/{id}/seats','flightController@showSeat');

Route::get('/customer/{id}/flight','flightController@details');


Route::get('/profile', function () {
    return view('contact');
});
