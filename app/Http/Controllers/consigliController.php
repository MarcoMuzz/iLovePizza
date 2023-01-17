<?php

namespace App\Http\Controllers;

use App\Models\Utente;
use App\Models\Consiglio;

class consigliController extends Controller
{

    public function Consigli(){
        return view('consigli',['consiglios' => Consiglio::all(), 'autores' => Utente::all()]);
    }
}
