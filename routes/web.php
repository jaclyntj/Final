<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::resource('admin/event', 'App\Http\Controllers\Admin\EventController');
Route::resource('admin/fasilitas', 'App\Http\Controllers\Admin\FasilitasController');
Route::resource('admin/jurusan', 'App\Http\Controllers\Admin\JurusanController');
Route::resource('admin/contact', 'App\Http\Controllers\Admin\ContactController');
Route::resource('admin/home', 'App\Http\Controllers\Admin\HomeController');