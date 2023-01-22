<?php

namespace App\Http\Controllers;

use App\Models\Associazione;
use App\Models\Associazione_Utente;
use App\Models\Utente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class associazioneController extends Controller
{
    public function Associazioni(){
        return view('associazioni',['associaziones' => Associazione::all(), 'capos' => Utente::all()]);
    }

    public function Associazione($id) {
        $associazione=Associazione::find($id);
        $capo=Utente::where('id','=',$associazione['utente_id'])->first();
        $membri=Associazione::find($id)->Membri;
        $ricette=Associazione::find($id)->Ricette; //contiene per ogni ricetta anche lo username dell'autore
        $consigli=Associazione::find($id)->Consigli ; //contiene per ogni consiglio anche lo username dell'autore

        return view('associazione',[
            'associaziones'=>$associazione,
            'capo'=>$capo,
            'membri'=>$membri,
            'ricette'=>$ricette,
            'consigli'=>$consigli,
        ]);

    }
    //funzioni per Modera Membri
    public function moderaMembri()
    {
        $membri=Auth::user()->Associazione->Membri->where('id','!=',Auth::user()->id)->where('ruolo','!=','3');
        return view('moderaMembri',['membri'=>$membri,'userRole'=>Auth::user()->custom]);
    }

    public function promuoviMembro(Request $request)
    {
        Associazione_Utente::where('utente_id',$request->m_id)->update((['ruolo' => '2']));
        return redirect()->route('moderaMembri');
    }

    public function espelliMembro(Request $request)
    {
        Associazione_Utente::where('utente_id',$request->m_id)->delete();
        return redirect()->route('moderaMembri');
    }

    public function declassaMembro(Request $request)
    {
        Associazione_Utente::where('utente_id',$request->m_id)->update((['ruolo' => '1']));
        return redirect()->route('moderaMembri');
    }
}



