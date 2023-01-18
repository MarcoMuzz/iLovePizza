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
        $associazione=Associazione::find($id);
        $capo=Utente::where('id','=',$associazione['utente_id'])->first();
        $membri=Associazione::find($id)->Membri;

        return view('associazione',[
            'associaziones'=>$associazione,
            'capo'=>$capo,
            'membri'=>$membri
        ]);

    }
}



