<?php

namespace App\Http\Controllers;

use App\Models\Associazione;
use App\Models\Consiglio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class creaConsiglio extends Controller
{
    public function ControllerConsiglio()
    {
        $temp=Auth::user()->Associazione_Utente;
        $associazione=Associazione::find($temp['associazione_id']);
        return view('creaConsiglio', [
            'associazione'=> $associazione
        ]);
    }

    public function CreaConsiglio(Request $request)
    {
        $consiglio = new Consiglio;
        $consiglio->nome = $request->nome;
        $consiglio->immagine = $request->immagine;
        $consiglio->contenuto = $request->contenuto;
        $consiglio->utente_id = Auth::user()->id;

        $consiglio->save();
        return redirect('/creaconsiglio')->with('status', 'Consiglio creato correttamente');
    }


}
