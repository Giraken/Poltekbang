<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/delay', function () {
    return view('delay');
});
Route::get('/cancellation', function () {
    return view('cancellation');
});
Route::get('/departure', function () {
    return view('departure');
});
Route::get('/modification', function () {
    return view('modification');
});
Route::get('/arrival', function () {
    return view('arrival');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/incoming-message', function () {
    return view('incoming-message');
});
Route::get('/message', function () {
    return view('message');
});
Route::get('/message', function () {
    return view('message');
});
Route::get('/filed-message', function () {
    return view('filed-message');
});
Route::get('/message-sent', function () {
    return view('message-sent');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
