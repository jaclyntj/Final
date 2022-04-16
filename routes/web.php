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
})->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
});

Route::resource('admin/event', 'App\Http\Controllers\Admin\EventController')->middleware('auth');
Route::resource('admin/fasilitas', 'App\Http\Controllers\Admin\FasilitasController')->middleware('auth');
Route::resource('admin/jurusan', 'App\Http\Controllers\Admin\JurusanController')->middleware('auth');
Route::resource('admin/contact', 'App\Http\Controllers\Admin\ContactController')->middleware('auth');
Route::resource('admin/home', 'App\Http\Controllers\Admin\HomeController')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
