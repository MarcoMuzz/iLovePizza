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

        return view('profilo',['utente'=>$ut,'associazione'=>$as]);
    }
}
