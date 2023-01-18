<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ricetteController;
use App\Http\Controllers\consigliController;
use App\Http\Controllers\associazioneController;

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

Route::get('/',[homeController::class, 'home'])->name('home');

Route::get('/home', [homeController::class, 'home'])->name('home');

//Route::get("home","homeController@home");

Route::get('/utente/{id}', [testController::class, 'utenteProfilo']); //route di test Profilo Utente

Route::get('/TipiDiPizze/{tipologia}', [ricetteController::class, 'Ricette'])->name('fabio'); //route di test delle ricette  <---- questa route mangia tutte le sottostanti

Route::get('/consigli', [consigliController::class, 'Consigli'])->name('consigli'); //route di test dei consigli

Route::get('/associazioni', [associazioneController::class, 'Associazioni'])->name('associazioni');

Route::get('/associazioni/{id}', [associazioneController::class, 'Associazione'])->name('associazione');

Route::get('/ricetta/{id}', [ricetteController::class, 'Ricetta'])->name('ricetta');//route ricette singole

Route::get('/consigli/{id}', [consigliController::class, 'Consiglio'])->name('consiglio');//route singolo consiglio



