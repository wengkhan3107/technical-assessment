<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes...
Route::get('auth/login', 'App\Http\Controllers\Auth\AuthController@getLogin');
Route::post('auth/login', 'App\Http\Controllers\Auth\AuthController@postLogin');
Route::get('auth/logout', 'App\Http\Controllers\Auth\AuthController@getLogout');
 
// Registration Routes...
Route::get('auth/register', 'App\Http\Controllers\Auth\AuthController@getRegister');
Route::post('auth/register', 'App\Http\Controllers\Auth\AuthController@postRegister');

Route::get('/tasks', 'App\Http\Controllers\TaskController@index');
Route::post('/task', 'App\Http\Controllers\TaskController@store');
Route::delete('/task/{task}', 'App\Http\Controllers\TaskController@destroy');

Route::get('/subscriptions', 'App\Http\Controllers\SubscriptionController@index');
Route::post('/subscription', 'App\Http\Controllers\SubscriptionController@store');
Route::delete('/subscription/{subscription}', 'App\Http\Controllers\SubscriptionController@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
