<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', [
    'as' => '/', 'uses' => 'PagesController@getIndex'
]);

Route::get('work', [
    'as' => 'work', 'uses' => 'PagesController@getWork'
]);

Route::get('resume', [
    'as' => 'resume', 'uses' => 'PagesController@getResume'
]);

Route::get('contact', [
    'as' => 'contact', 'uses' => 'PagesController@getContact'
]);

Route::get('blog', [
    'as' => 'blog', 'uses' => 'PagesController@getBlog'
]);

Route::resource('qualification','QualificationController');