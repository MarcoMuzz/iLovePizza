<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commento;
use Illuminate\Support\Facades\Auth;

class commentoController extends Controller
{
    public function CreaCommento(Request $request)
    {
        $commento = new Commento;
        $commento->ricetta_id = $request->ricetta_id;
        $commento->utente_id = Auth::user()->id;
        $commento->contenuto = $request->contenuto;
        $commento->save();
        return back();
    }
}
