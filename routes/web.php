<?php

use App\Http\Middleware\VerifyCsrfToken;
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
Route::get('/bot/telegram','TelegramController@index');
Route::post('/bot/telegram','TelegramController@store')->withoutMiddleware([VerifyCsrfToken::class]);
Route::get('/', function () {
    return view('welcome');
});
