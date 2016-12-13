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
Route::get('test', function ()
{
    return view('layouts.main');
});


Route::get('/', 'BeritaController@index')->name('user.home');
Route::get('/alter', 'BeritaController@alternatif');
Route::get('/berita/{id}', 'BeritaController@show');
Route::get('internal', 'BeritaController@internal');
Route::post('/berita/{id}/komentar', 'BeritaController@postKomentar')->name('post.komentar');
Route::get('tulisberita', function () {
    return view('berita.tulis');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('public.home');

$s = 'social.';
Route::get('/social/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\SocialController@getSocialRedirect']);
Route::get('/{provider}/handle/callback',     ['as' => $s . 'handle',     'uses' => 'Auth\SocialController@getSocialHandle']);
