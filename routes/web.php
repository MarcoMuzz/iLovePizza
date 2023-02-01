<?php

use App\Http\Controllers\RicercaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\ricetteController;
use App\Http\Controllers\consigliController;
use App\Http\Controllers\associazioneController;
use App\Http\Controllers\profiloController;
use App\Http\Controllers\commentoController;
use App\Http\Controllers\invitoController;
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

Route::get('/',[homepageController::class, 'homepage'])->name('homepage');//Autore: Venuto

Route::get('/home', [App\Http\Controllers\HomeController::class, 'homepage'])->name('home'); //Autore: Venuto

Route::get('/TipiDiPizze/{tipologia}', [ricetteController::class, 'Ricette'])->name('fabio'); //route per tutte le ricette di x tipologia //Autore: Musciacchio

Route::get('/consigli', [consigliController::class, 'Consigli'])->name('consigli'); //route per tutti i consigli //Autore: Venuto

Route::get('/associazioni', [associazioneController::class, 'Associazioni'])->name('associazioni'); //Autore: Stingi

Route::get('/associazioni/{id}', [associazioneController::class, 'Associazione'])->name('associazione'); //Autore: Stingi

Route::get('/ricetta/{id}', [ricetteController::class, 'Ricetta'])->name('ricetta');//route ricette singole //Autore: Musciacchio

Route::get('/consigli/{id}', [consigliController::class, 'Consiglio'])->name('consiglio'); //Autore: Venuto

Route::get('/ricerca', [RicercaController::class, 'Ricerca'])->name('ricerca');//Autore: Musciacchio

Route::get('/register/{token}', [invitoController::class, 'registrazioneInvito']);//Autore: Baso

Route::get('/storeInvitato', [invitoController::class, 'storeInvitato'])->name('storeInvitato');//Autore: Baso

Auth::routes();

Route::group(['middleware' => 'auth'], function () { //Gruppo Routes per utenti che hanno fatto il login

    Route::get('/commentocreato', [commentoController::class, 'CreaCommento'])->name('creacommento');//Autore: Venuto
    Route::get('/profilo', [profiloController::class, 'getProfilo'])->name('profilo'); //Autore: Stingi
    Route::get('/creaassociazione', [associazioneController::class, 'creaAssociazione'])->name('creaassociazione');//Autore: Stingi
    Route::get('/storeAssociazione', [associazioneController::class, 'storeAssociazione'])->name('storeassociazione');//Autore: Stingi
    Route::get('/votaRicetta', [ricetteController::class, 'votaRicetta'])->name('votaRicetta'); //Autore: Musciacchio
    Route::get('/votaConsiglio', [consigliController::class, 'votaConsiglio'])->name('votaConsiglio');//Autore: Venuto
    Route::get('/rimuoviVotoConsiglio', [consigliController::class, 'rimuoviVotoConsiglio'])->name('rimuoviVotoConsiglio');//Autore: Venuto



    Route::group(['middleware' => 'ruolo:1'], function () {  //Gruppo Routes per utenti che sono Membri
        Route::get('/crearicetta', [ricetteController::class, 'creaRicetta'])->name('crearicetta'); //Autore: Musciacchio
        Route::POST('/storericetta', [ricetteController::class, 'storeRicetta'])->name('storericetta'); //Autore: Musciacchio

        Route::get('/creaconsiglio', [consigliController::class, 'creaConsiglio'])->name('creaconsiglio');//Autore: Venuto
        Route::POST('/storeconsiglio', [consigliController::class, 'storeConsiglio'])->name('storeconsiglio');//Autore: Venuto

    });

    Route::group(['middleware' => 'ruolo:2'], function () {  //Gruppo Routes per utenti che sono Moderatori //Autore: Baso
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

    Route::group(['middleware' => 'ruolo:3'], function () {  //Gruppo Routes per utenti che sono Capi //Autore: Baso
        Route::post('/modera/declassa', [associazioneController::class, 'declassaMembro'])->name('declassaMembro');
        Route::post('/modera/promuovi', [associazioneController::class, 'promuoviMembro'])->name('promuoviMembro');
        Route::get('/invita', [invitoController::class, 'inserisciMail'])->name('invitaMembro');
        Route::get('/inviaInvito', [invitoController::class, 'inviaInvito'])->name('inviaInvito');
    });

});
