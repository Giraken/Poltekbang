<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/fpl-message-detail', function () {
    return view('fpl-message-detail');
});
Route::get('/chg-message-detail', function () {
    return view('chg-message-detail');
});
Route::get('/arr-message-detail', function () {
    return view('arr-message-detail');
});
Route::get('/dla-message-detail', function () {
    return view('dla-message-detail');
});
Route::get('/dep-message-detail', function () {
    return view('dep-message-detail');
});
Route::get('/cnl-message-detail', function () {
    return view('cnl-message-detail');
});
Route::get('/arr-messages', function () {
    return view('arr-messages');
});
Route::get('/chg-messages', function () {
    return view('chg-messages');
});
Route::get('/dep-messages', function () {
    return view('dep-messages');
});
Route::get('/dla-messages', function () {
    return view('dla-messages');
});
Route::get('/fpl-messages', function () {
    return view('fpl-messages');
});
Route::get('/cnl-messages', function () {
    return view('cnl-messages');
});
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
/*
|--------------------------------------------------------------------------
| Profil
|--------------------------------------------------------------------------
|
*/
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/profil', [App\Http\Controllers\HomeController::class, 'profil'])->name('profil');
Route::post('/profil', [App\Http\Controllers\HomeController::class, 'profilPost'])->name('profilPost');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
/*
|--------------------------------------------------------------------------
| ATS Message
|--------------------------------------------------------------------------
|
*/
Route::get('/search', [App\Http\Controllers\ATSController::class, 'search'])->name('search');
Route::get('/filed-message', [App\Http\Controllers\ATSController::class, 'filled_message'])->name('filled-message');
Route::post('/filed-message', [App\Http\Controllers\ATSController::class, 'filled_messagePost'])->name('filled-messagePost');
Route::get('/delay', [App\Http\Controllers\ATSController::class, 'delay'])->name('delay');
Route::post('/delay', [App\Http\Controllers\ATSController::class, 'delayPost'])->name('delayPost');
Route::get('/modification', [App\Http\Controllers\ATSController::class, 'modification'])->name('modification');
Route::post('/modification', [App\Http\Controllers\ATSController::class, 'modificationPost'])->name('modificationPost');
Route::get('/cancellation', [App\Http\Controllers\ATSController::class, 'cancellation'])->name('cancellation');
Route::post('/cancellation', [App\Http\Controllers\ATSController::class, 'cancellationPost'])->name('cancellationPost');
Route::get('/departure', [App\Http\Controllers\ATSController::class, 'departure'])->name('departure');
Route::post('/departure', [App\Http\Controllers\ATSController::class, 'departurePost'])->name('departurePost');
Route::get('/arrival', [App\Http\Controllers\ATSController::class, 'arrival'])->name('arrival');
Route::post('/arrival', [App\Http\Controllers\ATSController::class, 'arrivalPost'])->name('arrivalPost');
/*
|--------------------------------------------------------------------------
| Incoming Message
|--------------------------------------------------------------------------
|
*/
Route::get('/incoming-message', [App\Http\Controllers\IncomingController::class, 'incomingMessage'])->name('incomingMessage');
Route::get('/incoming-message/api', [App\Http\Controllers\IncomingController::class, 'incomingMessageApi'])->name('incomingMessageApi');
Route::get('/message', [App\Http\Controllers\IncomingController::class, 'message'])->name('message');
/*
|--------------------------------------------------------------------------
| Message Sent
|--------------------------------------------------------------------------
|
*/
Route::get('/message-sent', [App\Http\Controllers\SentController::class, 'messageSent'])->name('messageSent');

Route::get('/test', function () {

    return view('test');
});

// Sementara
Route::get('/fpl-messages', function () {
    return view('fpl-messages');
});

Route::get('/chg-messages', function () {
    return view('chg-messages');
});

Route::get('/dla-messages', function () {
    return view('dla-messages');
});

Route::get('/cnl-messages', function () {
    return view('cnl-messages');
});

Route::get('/dep-messages', function () {
    return view('dep-messages');
});

Route::get('/arr-messages', function () {
    return view('arr-messages');
});
