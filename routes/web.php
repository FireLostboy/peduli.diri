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
    return view('template.landingpage');
});

Auth::routes();


Route::Group(['middleware' => ['auth', 'checkRole:admin']],function(){
    Route::get('/admin', 'adminController@index')->name('home');
});
Route::Group(['middleware' => ['auth', 'checkRole:admin,user']],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'dashboardController@index')->name('home');
    
    Route::get('/perjalanan', 'perjalananController@index');
    Route::get('/perjalanan/create', 'perjalananController@create');
    Route::post('/perjalanan/store', 'perjalananController@store');
    Route::get('/perjalanan/delete/{id}', 'perjalananController@destroy');
    
    Route::get('/user_pdf', 'userController@cetak_pdf');
    Route::get('/user/edit/{id}', 'userController@edit');
    Route::put('/user/update/{id}', 'userController@update');
});



Route::get('app', function () {
    return view('admin');
});
