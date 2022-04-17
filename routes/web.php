<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/chat', [ChatController::class, 'chat']);
Route::post('/send', [ChatController::class, 'send']);
Route::post('/getOldMessage', [ChatController::class, 'getOldMessage']);
Route::post('/saveToSession', [ChatController::class, 'saveToSession']);
Route::post('/deleteSession', [ChatController::class, 'deleteSession']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
