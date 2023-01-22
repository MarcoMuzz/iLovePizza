<?php

namespace App\Http\Controllers;

use App\Models\Associazione;
use App\Models\Associazione_Utente;
use App\Models\Utente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class testController extends Controller
{
    private function GetAssociazioneId($id)
    {
        if( Associazione_Utente::find($id)!= null)
            return Associazione_Utente::find($id)->associazione_id;
        else
            return null;
    }


    public function Profilo()
    {
        $ut=Auth::user();
        return view('test',['ut'=>$ut]);
    }

    public function test()
    {
        $test=Auth::user()->Associazione;

        return view('test',['test'=>$test]);
    }

    public function Modera()
    {
        $membri=Auth::user()->Associazione->Membri->where('id','!=',Auth::user()->id)->where('ruolo','!=','3');

        return view('moderaMembri',['membri'=>$membri,'userRole'=>Auth::user()->custom]);
    }

    public function promuoviMembro(Request $request)
    {
        Associazione_Utente::where('utente_id',$request->m_id)->update((['ruolo' => '2']));
        return redirect()->route('modera');
    }

    public function espelliMembro(Request $request)
    {
        Associazione_Utente::where('utente_id',$request->m_id)->delete();
        return redirect()->route('modera');
    }

    public function declassaMembro(Request $request)
    {
        //$associazione=Auth::user()->Associazione;
        Associazione_Utente::where('utente_id',$request->m_id)->update((['ruolo' => '1']));

        return redirect()->route('modera');
    }


}
