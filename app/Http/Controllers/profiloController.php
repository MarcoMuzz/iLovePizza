<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profiloController extends Controller
{
    public function getProfilo()
    {
        $ut=Auth::user();
        $as=Auth::user()->Associazione;
        $ricette=Auth::user()->Ricetta;
        $consigli=Auth::user()->Consiglio;

        return view('profilo',[
            'utente'=>$ut,
            'associazione'=>$as,
            'ricette'=>$ricette,
            'consigli'=>$consigli
        ]);
    }
}
