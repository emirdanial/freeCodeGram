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

Auth::routes();


Route::post('follow/{user}', 'FollowsController@store');


Route::get('/', 'PostsController@index' );

Route::get('/p/create', 'PostsController@create' );

Route::get('/p/{post}', 'PostsController@show' );

Route::post('/p', 'PostsController@store' );


Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');


Route::post('/comments/{post}', 'CommentController@store');

Route::get('/test', function () {
	$pdf = \App::make('snappy.pdf.wrapper');
	$pdf->loadHTML('<h1>Test</h1>');
	return $pdf->stream();
});