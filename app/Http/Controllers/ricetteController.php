<?php

namespace App\Http\Controllers;
use App\Models\Ricetta;
use App\Models\Utente;

use Illuminate\Http\Request;


class ricetteController extends Controller
{

    public function Ricette($tipologia) {

        switch ($tipologia) {
            case "tutte":
                return view('ricette',['ricettas' => Ricetta::all(), 'autores' => Utente::all()]);
            case "napoletana":
                return view('ricette',['ricettas' => Ricetta::all()->where('napoletana', 1), 'autores' => Utente::all()]);
            case "romana":
                return view('ricette',['ricettas' => Ricetta::all()->where('romana', 1), 'autores' => Utente::all()]);
            case "resto":
                return view('ricette',['ricettas' => Ricetta::all()->where('resto', 1), 'autores' => Utente::all()]);
            case "internazionale":
                return view('ricette',['ricettas' => Ricetta::all()->where('internazionale', 1), 'autores' => Utente::all()]);
        }


    }


}
