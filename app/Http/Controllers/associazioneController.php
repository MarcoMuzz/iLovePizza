<?php

namespace App\Http\Controllers;

use App\Models\Associazione;
use App\Models\Associazione_Utente;
use App\Models\Utente;
use Illuminate\Http\Request;

class associazioneController extends Controller
{
    public function Associazioni(){
        return view('associazioni',['associaziones' => Associazione::all(), 'capos' => Utente::all()]);
    }

    public function Associazione($id) {
        $associazione=Associazione::where('id', '=',$id)->first();
        $capo=Utente::where('id','=',$associazione['id_capo'])->first();
        $membri=Associazione_Utente::where('id_associazione','=',$id);
        //$utenti=Utente::join();
        //$utenti=Associazione_Utente::all()->Utente();
        return view('associazione',[
           'associaziones'=>$associazione,
            'capo'=>$capo,
            'membri'=>$membri

        ]);
    }
}



