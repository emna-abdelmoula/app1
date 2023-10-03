<?php

use Illuminate\Support\Facades\Route;

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
Route::get('accueil', function () {
    return 'Bienvenue sur le site!';
    
    });
    Route::get('page1', function() { return 'Je suis la page 1 !';});
    Route::get('page2', function() { return 'Je suis la page 2 !';});
    Route::get('page3', function() { return 'Je suis la page 3 !';});