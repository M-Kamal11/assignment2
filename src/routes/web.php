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

        if(session()->has('data'))
        {
            return view('home');
        }
        else{
            return view('loginsignup');

        }

});
Route::get('/logout', function () {
    if(session()->has('data'))
    {
        session()->pull('data');
    }
    return view('loginsignup');
});

Route::post('/signup', 'App\Http\Controllers\Controller@addUser');
Route::post('/login', 'App\Http\Controllers\Controller@login');
Route::post('/submit', 'App\Http\Controllers\Controller@addregister');
Route::post('/contact', 'App\Http\Controllers\Controller@addcontact');