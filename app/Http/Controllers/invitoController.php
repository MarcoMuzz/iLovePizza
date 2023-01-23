<?php

namespace App\Http\Controllers;
use App\Mail\mailInvito;
use App\Models\Utente;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class invitoController extends Controller
{
    public function inserisciMail(){

        //$capoDi=Auth::user()->Associazione;

        return view('invito');

    }
    public function inviaInvito(){

        Mail::to('culo@culo.com')->send(new mailInvito());
        return'Invito consegnato!';

    }


}
