<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ricetteController;

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

Route::get('/',[homeController::class, 'home']);

Route::get('/home', [homeController::class, 'home']);

//Route::get("home","homeController@home");

Route::get('/utente/{id}', [testController::class, 'utenteProfilo']); //route di test Profilo Utente


Route::get('/{tipologia}', [ricetteController::class, 'Ricette']); //route di test delle ricette



