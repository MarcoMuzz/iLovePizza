<?php

namespace App\Http\Controllers;
use App\Mail\mailInvito;
use App\Models\Utente;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class invitoController extends Controller
{
    public function inserisciMail(){

        //$ifAdmin=Auth::user()->custom;

        return view('invito'/*,[$ifAdmin]*/ );

    }
    public function inviaInvito(){

        Mail::to('')->send(new mailInvito());
        return'Invito consegnato!';

    }


}
