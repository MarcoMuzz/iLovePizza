<?php

use App\Http\Controllers\RicercaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\ricetteController;
use App\Http\Controllers\consigliController;
use App\Http\Controllers\associazioneController;
use App\Http\Controllers\profiloController;
use App\Http\Controllers\creaRicetta;
use App\Http\Controllers\creaConsiglio;
use App\Http\Controllers\commentoController;
use App\Http\Controllers\invitoController;
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

Route::get('/TipiDiPizze/{tipologia}', [ricetteController::class, 'Ricette'])->name('fabio'); //route per tutte le ricette di x tipologia

Route::get('/consigli', [consigliController::class, 'Consigli'])->name('consigli'); //route per tutti i consigli

Route::get('/associazioni', [associazioneController::class, 'Associazioni'])->name('associazioni');

Route::get('/associazioni/{id}', [associazioneController::class, 'Associazione'])->name('associazione');

Route::get('/ricetta/{id}', [ricetteController::class, 'Ricetta'])->name('ricetta');//route ricette singole

Route::get('/consigli/{id}', [consigliController::class, 'Consiglio'])->name('consiglio');

Route::get('/ricerca', [RicercaController::class, 'Ricerca'])->name('ricerca');//route ricerca




Auth::routes();


// route di testing
//Route::get('/profilo', [testController::class, 'Profilo']); //route di test
//Route::get('/test', [testController::class, 'test']); //route di test
//Route::get('/modera', [testController::class, 'Modera']); //route di test
//Route::post('/modera', [testController::class, 'promuoviMembro'])->name('promuoviMembro'); //route di test
//Route::post('/modera2', [testController::class, 'espelliMembro'])->name('espelliMembro'); //route di test
//Route::post('/modera3', [testController::class, 'declassaMembro'])->name('declassaMembro'); //route di test
//

//invito membri

Route::get('/invita', [invitoController::class, 'inserisciMail'])->name('invitaMembro');
Route::post('/invita', [invitoController::class, 'inviaInvito'])->name('inviaInvito');



Route::group(['middleware' => 'auth'], function () { //Gruppo Routes per utenti che hanno fatto il login

    Route::get('/commentocreato', [commentoController::class, 'CreaCommento'])->name('creacommento');
    Route::get('/profilo', [profiloController::class, 'getProfilo'])->name('profilo');
    Route::get('/creaassociazione', [associazioneController::class, 'creaAssociazione'])->name('creaassociazione');
    Route::get('/storeAssociazione', [associazioneController::class, 'storeAssociazione'])->name('storeassociazione');
    Route::get('/votaRicetta', [ricetteController::class, 'votaRicetta'])->name('votaRicetta');
    Route::get('/votaConsiglio', [consigliController::class, 'votaConsiglio'])->name('votaConsiglio');
    Route::get('/rimuoviVotoConsiglio', [consigliController::class, 'rimuoviVotoConsiglio'])->name('rimuoviVotoConsiglio');



    Route::group(['middleware' => 'ruolo:1'], function () {  //Gruppo Routes per utenti che sono Membri
        Route::get('/crearicetta', [ricetteController::class, 'creaRicetta'])->name('crearicetta');
        Route::get('/storericetta', [ricetteController::class, 'storeRicetta'])->name('storericetta');

        Route::get('/creaconsiglio', [consigliController::class, 'creaConsiglio'])->name('creaconsiglio');
        Route::get('/storeconsiglio', [consigliController::class, 'storeConsiglio'])->name('storeconsiglio');

    });

    Route::group(['middleware' => 'ruolo:2'], function () {  //Gruppo Routes per utenti che sono Moderatori
        Route::get('/modera', [associazioneController::class, 'moderaMembri'])->name('moderaMembri');
        Route::post('/modera/espelli', [associazioneController::class, 'espelliMembro'])->name('espelliMembro');

        Route::get('moderaContenuti',[associazioneController::class, 'moderaContenuti'])->name('moderaContenuti');

        Route::post('/moderaContenuti/eliminaRicetta', [ricetteController::class, 'eliminaRicetta'])->name('eliminaRicetta');
        Route::get('/moderaContenuti/modificaRicetta/{id}', [ricetteController::class, 'modificaRicetta'])->name('modificaRicetta');
        Route::get('/moderaContenuti/aggiornaRicetta',[ricetteController::class, 'updateRicetta'])->name('updateRicetta');

        Route::post('/moderaContenuti/eliminaConsiglio', [consigliController::class, 'eliminaConsiglio'])->name('eliminaConsiglio');
        Route::get('/moderaContenuti/modificaConsiglio/{id}', [consigliController::class, 'modificaConsiglio'])->name('modificaConsiglio');
        Route::get('/moderaContenuti/aggiornaConsiglio',[consigliController::class, 'updateConsiglio'])->name('updateConsiglio');
    });

    Route::group(['middleware' => 'ruolo:3'], function () {  //Gruppo Routes per utenti che sono Capi
        Route::post('/modera/declassa', [associazioneController::class, 'declassaMembro'])->name('declassaMembro');
        Route::post('/modera/promuovi', [associazioneController::class, 'promuoviMembro'])->name('promuoviMembro');
    });

});
