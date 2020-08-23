<?php

use App\Http\Controllers\ProjectController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Miguel Alarcon

//Before ROUTE RESOURCE

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::resource('portafolio', 'ProjectController')
    ->parameters(['portafolio' => 'project'])
    ->names('projects');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');

Auth::routes(['register' => false]);
