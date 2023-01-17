<?php

namespace App\Http\Controllers;

use App\Models\Associazione;
use App\Models\Utente;
use Illuminate\Http\Request;

class associazioneController extends Controller
{
    public function Associazioni(){
        return view('associazioni',['associaziones' => Associazione::all(), 'capos' => Utente::all()]);
    }
}
