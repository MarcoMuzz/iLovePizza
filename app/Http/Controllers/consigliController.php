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
        $conto=Utente_Consiglio::where('consiglio_id','=', $id)->count();
        $consiglio=Consiglio::where('id', '=',$id)->first();
        $autore=Utente::where('id','=',$consiglio['utente_id'])->first();
        $temp=Associazione_Utente::where('utente_id',$autore['id'])->first();
        $associazione=Associazione::where('id',$temp['associazione_id'])->first();
        return view('consiglio',[
            'consiglios'=>$consiglio,
            'autore'=>$autore,
            'conto'=>$conto,
            'associazione'=>$associazione,
        ]);
    }
}
