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
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/details', function () {
    return view('ajout_etudiant');
});

Route::post('/save-etudiant', 'App\Http\Controllers\EtudiantController@store');

Route::get('/liste', 'App\Http\Controllers\EtudiantController@index');

Route::get('/details/{id}', 'App\Http\Controllers\EtudiantController@get');

