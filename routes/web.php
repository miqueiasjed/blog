<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/login', function () {
    if(Auth::user()){
        return Redirect::to('home');
    }else{
        return Redirect::to('login');
    }
});

Auth::routes();

Route::get('/', 'PagesController@getIndex')->name('page.index');
Route::get('about', 'PagesController@getAbout')->name('page.about');
Route::get('contact', 'PagesController@getContact')->name('page.contact');





Route::get('/home', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home.index');

Route::resource('user', 'UserController');


