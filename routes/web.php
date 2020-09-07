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


Route::get('/homepage', function(){
    return view ('homepage');
})->name("home");

Route::get('/ranking', function(){
    return view ('ranking');
})->name("ranking");

Route::get('/login', function(){
    return view ('login');
})->name("login");

Route::get('/cadastrarpet', function(){
    return view ('cadastrarpet');
})->name("cadastropet");

Route::get('/header', function(){
    return view ('header');
})->name("header");

Route::get('/footer', function(){
    return view ('footer');
})->name("footer");

Route::get('/adote', function(){
    return view ('adote');
})->name("adote");

Route::get('/', function(){
    return view ('welcome');
});
 
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
