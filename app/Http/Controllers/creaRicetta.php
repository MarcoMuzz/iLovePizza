<?php

namespace App\Http\Controllers;

use App\Models\Associazione;
use App\Models\Ricetta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class creaRicetta extends Controller
{
    public function ControllerRicetta()
    {
        $temp=Auth::user()->Associazione_Utente;
        // Auth::user() prende la tupla dell'utente autenticato dalla tabella utentes
        // con '->Associazione_Utente' associa la tupla precedente a quella della tabella Associazione_Utente in cui si trova l'id dell'associazione a cui l'utente appartiene
        $associazione=Associazione::find($temp['associazione_id']);
        // con il comando di sopra si va a trovare i dati dell'associazione relativi a quella il cui id è presente nella tupla trovata precedentemente
        return view('creaRicetta', [
            'associazione'=> $associazione
        ]);

    }


    public function CreaRicetta(Request $request)
    {
        $ricetta = new Ricetta;
        $ricetta->nome = $request->nome;
        $ricetta->ingredienti = $request->ingredienti;
        $ricetta->preparazione = $request->preparazione;

        switch ($request->tipologia) {
            case 'napoletana':
                $ricetta->napoletana = 1;
                break;
            case 'romana':
                $ricetta->romana = 1;
                break;
            case 'internazionale':
                $ricetta->internazionale = 1;
                break;
            case 'resto':
                $ricetta->resto = 1;
                break;
        }
        $ricetta->cottura = $request->cottura;
        $ricetta->immagine = $request->immagine;
        $ricetta->utente_id = Auth::user()->id;

        $ricetta->save();
        return redirect('/crearicetta')->with('status', 'Ricetta creata correttamente');
    }


}
