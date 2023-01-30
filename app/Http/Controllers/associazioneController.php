<?php

namespace App\Http\Controllers;

use App\Models\Associazione;
use App\Models\Associazione_Utente;
use App\Models\Consiglio;
use App\Models\Ricetta;
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
        return redirect()->route('moderaMembri')->with('status','Membro promosso con successo.');
    }

    public function espelliMembro(Request $request)
    {
        Associazione_Utente::where('utente_id',$request->m_id)->delete();
        return redirect()->route('moderaMembri')->with('status','Membro espulso con successo.');
    }

    public function declassaMembro(Request $request)
    {
        Associazione_Utente::where('utente_id',$request->m_id)->update((['ruolo' => '1']));
        return redirect()->route('moderaMembri')->with('status','Membro declassato con successo.');
    }


    public function creaAssociazione(){

        return view('creaAssociazione');
    }



    public function storeAssociazione(Request $request){

    $associazione = New Associazione;
    $associazione->nome = $request->nome;
    if($request->napoletana == 'on') $associazione->napoletana = 1;
    if($request->romana == 'on') $associazione->romana = 1;
    if($request->resto == 'on') $associazione->resto = 1;
    if($request->internazionale == 'on') $associazione->internazionale = 1;
    $associazione->utente_id = Auth::user()->id;
    $associazione->save();

    $assut = new Associazione_Utente();
    $assut->utente_id = Auth::user()->id;
    $assut->associazione_id = $associazione->id;
    $assut->ruolo = 3;
    $assut->save();

    return redirect('/')->with('status', 'Associazione creata correttamente');


}

    public function moderaContenuti()
    {
        $ricette=Auth::user()->Associazione->Ricette;
        $consigli=Auth::user()->Associazione->Consigli;
        return view('moderaContenuti',['ricette'=>$ricette,'consigli'=>$consigli]);
    }
}
