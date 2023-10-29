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

Route::get('/',[
    'as'=>'home',
    'uses'=>'PagesController@home'
]);
Route::get('/about',[
    'as'=>'about',
    'uses'=>'PagesController@about'
]);
Route::get('/contact',[
    'as'=>'contact',
    'uses'=>'ContactController@create'
]);
Route::post('/contact',[
    'as'=>'contact',
    'uses'=>'ContactController@store'
]);
Route::get('/test-email', function() {
// return new \App\Mail\MessageSended("belakebi",'bbelakebi@dta.dz','une salutation');
    return new \App\Mail\ContactMessageCreated('Bous','bousbelakebi@gmail.com','Bonjour');
});