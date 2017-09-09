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

//Route::get('/login', 'HomeController@login') ;
//Route::get('/register', 'HomeController@register') ;
Route::get('/', function () {
    return view('main');
});
Route::get('/search', function () {
    return view('search');
});
//Route::get('/admin','UserController@getLogin');
//Route::get('/admin', 'AloginController@getLogin');
//Route::get('/post', 'P@getPost');
Route::get('/web.php', 'CourseController@test1');
Route::get('/admin','UserController@getLogin');
Route::any('/admin/login','UserController@postLogin');
Route::get('/ApplyController/getCalendar', 'ApplyController@getCalendar');
Route::get('/application', function () {
    return view('application');
});


Route::get('/info', function () {
    return view('info');
});

//Route::get('/admin', 'AloginController@getLogin');

Auth::routes();
//Route::get('login', 'Auth\LoginController@LoginController');
//Route::get('register', 'Auth\RegisterController@RegisterController');
Route::get('/home', 'HomeController@index')->name('home');
