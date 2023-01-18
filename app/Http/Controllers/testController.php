<?php

namespace App\Http\Controllers;

use App\Models\Associazione;
use App\Models\Associazione_Utente;
use App\Models\Utente;
use Illuminate\Http\Request;

class testController extends Controller
{
    private function GetAssociazioneId($id)
    {
        if( Associazione_Utente::find($id)!= null)
            return Associazione_Utente::find($id)->associazione_id;
        else
            return null;
    }

   /* public function utenteProfilo($id)
    {
        $utente=Utente::findOrFail($id);
        $associazione=$this->GetAssociazioneId($id);
        if($associazione!= null)
        {
            $associazione=Associazione::find($this->GetAssociazioneId($id));
            return view('utenteProfilo',[
                'utente' => $utente,
                'associazione' => $associazione
            ]);
        }
        else
        {
            return view('utenteProfilo',[
                'utente' => $utente,
                'associazione' => 'null'
            ]);
        }
    }
    */
    public function utenteProfilo($id)
    {
        //$membri=Associazione_Utente::where('associazione_id',$id)->Utente;
        $membri=Associazione_Utente::find(2)->AU_Utente;
     return view('utenteProfilo',[
         'membri'=>$membri
     ])   ;
    }

}
