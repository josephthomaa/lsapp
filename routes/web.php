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


/*
Route::get('/hello',function
    return "Hello";
});


// passing dynamic values

Route::get('/users/{id}',function($id){
    return "The id is ".$id;
*/

/*Route::get('/', function () {
    return view('pages.index');
});*/

Route::get('/','PagesController@Index');
//Route::get('/about',function(){    return view('pages.about');});

Route::get('/about', 'PagesController@About');

Route::get('/services', 'PagesController@services');

Route::resource('posts','PostsController');

    
