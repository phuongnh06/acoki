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

Route::resource('/', 'JobController')->except('destroy');

Route::get('/redirect', ['as' => 'facebookredirect', 'uses' => 'FacebookLoginController@redirect']);
Route::get('/login', ['as' => 'facebookcallback', 'uses' => 'FacebookLoginController@callback']);
Route::get('/logout', function(){
    Auth::logout();
    return redirect()->route('index');
})->name('logout');