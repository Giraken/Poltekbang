<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
Route::post('/search', [App\Http\Controllers\ATSController::class, 'searchPost'])->name('searchPost');
Route::get('/arr-messages', [App\Http\Controllers\ATSController::class, 'arrMessages'])->name('arrMessages');
Route::get('/chg-messages', [App\Http\Controllers\ATSController::class, 'chgMessages'])->name('chgMessages');
Route::get('/dep-messages', [App\Http\Controllers\ATSController::class, 'depMessages'])->name('depMessages');
Route::get('/dla-messages', [App\Http\Controllers\ATSController::class, 'dlaMessages'])->name('dlaMessages');
Route::get('/fpl-messages', [App\Http\Controllers\ATSController::class, 'fplMessages'])->name('fplMessages');
Route::get('/cnl-messages', [App\Http\Controllers\ATSController::class, 'cnlMessages'])->name('cnlMessages');
Route::get('/fpl-message-detail/{id}', [App\Http\Controllers\ATSController::class, 'fplDetail'])->name('fplDetail');
Route::get('/chg-message-detail/{id}', [App\Http\Controllers\ATSController::class, 'chgDetail'])->name('chgDetail');
Route::get('/arr-message-detail/{id}', [App\Http\Controllers\ATSController::class, 'arrDetail'])->name('arrDetail');
Route::get('/dla-message-detail/{id}', [App\Http\Controllers\ATSController::class, 'dlaDetail'])->name('dlaDetail');
Route::get('/dep-message-detail/{id}', [App\Http\Controllers\ATSController::class, 'depDetail'])->name('depDetail');
Route::get('/cnl-message-detail/{id}', [App\Http\Controllers\ATSController::class, 'cnlDetail'])->name('cnlDetail');
/*
|--------------------------------------------------------------------------
| Messages
|--------------------------------------------------------------------------
|
*/
Route::get('/filed-message', [App\Http\Controllers\MessagesController::class, 'filled_message'])->name('filled-message');
Route::post('/filed-message', [App\Http\Controllers\MessagesController::class, 'filled_messagePost'])->name('filled-messagePost');
Route::get('/delay', [App\Http\Controllers\MessagesController::class, 'delay'])->name('delay');
Route::post('/delay', [App\Http\Controllers\MessagesController::class, 'delayPost'])->name('delayPost');
Route::get('/modification', [App\Http\Controllers\MessagesController::class, 'modification'])->name('modification');
Route::post('/modification', [App\Http\Controllers\MessagesController::class, 'modificationPost'])->name('modificationPost');
Route::get('/cancellation', [App\Http\Controllers\MessagesController::class, 'cancellation'])->name('cancellation');
Route::post('/cancellation', [App\Http\Controllers\MessagesController::class, 'cancellationPost'])->name('cancellationPost');
Route::get('/departure', [App\Http\Controllers\MessagesController::class, 'departure'])->name('departure');
Route::post('/departure', [App\Http\Controllers\MessagesController::class, 'departurePost'])->name('departurePost');
Route::get('/arrival', [App\Http\Controllers\MessagesController::class, 'arrival'])->name('arrival');
Route::post('/arrival', [App\Http\Controllers\MessagesController::class, 'arrivalPost'])->name('arrivalPost');
Route::get('/free-text', [App\Http\Controllers\MessagesController::class, 'freeText'])->name('freeText');
Route::post('/free-text', [App\Http\Controllers\MessagesController::class, 'freeTextPost'])->name('freeTextPost');
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
Route::get('/downloadPDF',[App\Http\Controllers\IncomingController::class, 'downloadPDF'])->name('downloadPDF');



Route::get('/pdf', function () {
    return view('pdf');
});

// Route::get('/chg-messages', function () {
//     return view('chg-messages');
// });

// Route::get('/dla-messages', function () {
//     return view('dla-messages');
// });

// Route::get('/cnl-messages', function () {
//     return view('cnl-messages');
// });

// Route::get('/dep-messages', function () {
//     return view('dep-messages');
// });

// Route::get('/arr-messages', function () {
//     return view('arr-messages');
// });

// Route::get('/search-fpl-messages', function () {
//     return view('search-fpl-messages');
// });
// Route::get('/search-dla-messages', function () {
//     return view('search-dla-messages');
// });

// Route::get('/fpl-message-detail', function () {
//     return view('fpl-message-detail');
// });
// Route::get('/chg-message-detail', function () {
//     return view('chg-message-detail');
// });
// Route::get('/arr-message-detail', function () {
//     return view('arr-message-detail');
// });
// Route::get('/dla-message-detail', function () {
//     return view('dla-message-detail');
// });
// Route::get('/dep-message-detail', function () {
//     return view('dep-message-detail');
// });
// Route::get('/cnl-message-detail', function () {
//     return view('cnl-message-detail');
// });
// Route::get('/arr-messages', function () {
//     return view('arr-messages');
// });
// Route::get('/chg-messages', function () {
//     return view('chg-messages');
// });
// Route::get('/dep-messages', function () {
//     return view('dep-messages');
// });
// Route::get('/dla-messages', function () {
//     return view('dla-messages');
// });
// Route::get('/fpl-messages', function () {
//     return view('fpl-messages');
// });
// Route::get('/cnl-messages', function () {
//     return view('cnl-messages');
// });
