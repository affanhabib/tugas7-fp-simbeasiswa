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
    return view('awal');
});
Route::post('/message','MessageController@postmessage');
Route::get('/viewmessage','MessageController@viewmessage');

Route::post('/register1','LoginController@postregister');
Route::post('/login1','LoginController@postuser');

Route::get('/contact', function () {
 	return view('contact');
});

Route::get('/upload', function () {
 	return view('upload');
});

Route::post('/upload1','FileController@postfile');

Route::get('/sisgp', function() {
	return view('blog3');
});

Route::get('/ytub', function() {
	return view('blog4');
});

Route::get('/sisteminformasi', function() {
	$files=App\File::get();
	return view('viewupload',compact('files'));
});

Route::post('/search','FileController@search');


Route::get('/alumni', function() {
	return view('alumni');
});
Route::get('/institusi', function() {
	return view('institusi');
});
Route::get('/non-institusi', function() {
	return view('non');
});
Route::get('/pasca-sarjana', function() {
	return view('pasca');
});
Route::get('/luar-negeri', function() {
	return view('luar');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{id}','HomeController@postid');
Auth::routes();
