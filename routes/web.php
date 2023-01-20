<?php

use App\Http\Controllers\RicercaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\ricetteController;
use App\Http\Controllers\consigliController;
use App\Http\Controllers\associazioneController;
use App\Http\Controllers\creaRicetta;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\VerificaRuolo;

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

Route::get('/',[homepageController::class, 'homepage'])->name('homepage');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'homepage'])->name('home');




Route::get('/TipiDiPizze/{tipologia}', [ricetteController::class, 'Ricette'])->name('fabio'); //route di test delle ricette  <---- questa route mangia tutte le sottostanti

Route::get('/consigli', [consigliController::class, 'Consigli'])->name('consigli'); //route di test dei consigli

Route::get('/associazioni', [associazioneController::class, 'Associazioni'])->name('associazioni');

Route::get('/associazioni/{id}', [associazioneController::class, 'Associazione'])->name('associazione');

Route::get('/ricetta/{id}', [ricetteController::class, 'Ricetta'])->name('ricetta');//route ricette singole

Route::get('/consigli/{id}', [consigliController::class, 'Consiglio'])->name('consiglio');

Route::get('/ricerca', [RicercaController::class, 'Ricerca'])->name('ricerca');//route ricerca




Auth::routes();


// route di testing
//Route::get('/utente/{id}', [testController::class, 'utenteProfilo']); //route di test Profilo Utente

Route::group(['middleware' => 'auth'], function () { //Gruppo Routes per utenti che hanno fatto il login

    Route::get('/profilo', [testController::class, 'test']);

    Route::group(['middleware' => 'ruolo:1'], function () {  //Gruppo Routes per utenti che sono Membri
        Route::get('/crearicetta', [creaRicetta::class, 'ControllerRicetta'])->name('controllerricetta');
        Route::get('/ricettacreata', [creaRicetta::class, 'CreaRicetta'])->name('crearicetta');

    });

    Route::group(['middleware' => 'ruolo:2'], function () {  //Gruppo Routes per utenti che sono Moderatori

    });

    Route::group(['middleware' => 'ruolo:3'], function () {  //Gruppo Routes per utenti che sono Capi

    });

});
