<?php

namespace App\Http\Controllers;

use App\Models\Associazione;
use App\Models\Associazione_Utente;
use App\Models\Consiglio;
use App\Models\Utente;
use App\Models\Utente_Consiglio;

class consigliController extends Controller
{

    public function Consigli() {
        return view('consigli',['consiglios' => Consiglio::all(), 'autores' => Utente::all()]);
    }

    public function Consiglio($id) {
        $conto=Utente_Consiglio::where('id_consiglio','=', $id)->count();
        $consiglio=Consiglio::where('id', '=',$id)->first();
        $autore=Utente::where('id','=',$consiglio['id_autore'])->first();
        $temp=Associazione_Utente::where('id_utente',$autore['id'])->first();
        $associazione=Associazione::where('id',$temp['id_associazione'])->first();
        return view('consiglio',[
            'consiglios'=>$consiglio,
            'autore'=>$autore,
            'conto'=>$conto,
            'associazione'=>$associazione,
        ]);
    }
}
