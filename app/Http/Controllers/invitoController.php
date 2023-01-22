<?php

namespace App\Http\Controllers;
use App\Mail\mailInvito;
use App\Models\Utente;
use Illuminate\Support\Facades\Mail;

class invitoController extends Controller
{
    public function inserisciMail(){

        return view('invito');

    }
    public function inviaInvito(){

        Mail::to('ije@mail.com')->send(new mailInvito());
        return'Invito consegnato!';

    }


}
