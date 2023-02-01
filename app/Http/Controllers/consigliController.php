<?php

namespace App\Http\Controllers;

use App\Models\Associazione;
use App\Models\Associazione_Utente;
use App\Models\Consiglio;
use App\Models\Utente;
use App\Models\Utente_Consiglio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Autore: Venuto
 */
class consigliController extends Controller
{

    public function Consigli() {
        return view('consigli',['consiglios' => Consiglio::paginate(5), 'autores' => Utente::all()]);
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

    public function creaConsiglio()
    {
        $temp=Auth::user()->Associazione_Utente;
        $associazione=Associazione::find($temp['associazione_id']);
        return view('creaConsiglio', [
            'associazione'=> $associazione
        ]);
    }

    public function storeConsiglio(Request $request)
    {
        $consiglio = new Consiglio;
        $consiglio->nome = $request->nome;
        $file = $request->file('immagine');
        $estensione =$request->file('immagine')->getClientOriginalExtension();
        $nomefile = time().'.'.$estensione;
        $file->move('cons', $nomefile);
        $consiglio->immagine=$nomefile;
        $consiglio->contenuto = $request->contenuto;
        $consiglio->utente_id = Auth::user()->id;

        $consiglio->save();
        return redirect('/creaconsiglio')->with('status', 'Consiglio creato correttamente');
    }

    public function eliminaConsiglio(Request $request)
    {
        Consiglio::where('id',$request->id)->delete();
        return redirect()->route('moderaContenuti')->with('status', 'Consiglio eliminato');
    }

    public function modificaConsiglio($id)
    {
        return view('modificaConsiglio',[
            'id'=>$id,
            'associazione'=>Auth::user()->Associazione,
            'consiglio'=>Consiglio::find($id)
        ]);
    }

    public function updateConsiglio(Request $request)
    {
        Consiglio::find($request->id)->update([
            'nome'=>$request->nome,
            'contenuto'=>$request->contenuto
        ]);

        return redirect()->route('moderaContenuti')->with('status', 'Consiglio modificato');
    }

    public function votaConsiglio(Request $request)
    {
        $like= new Utente_Consiglio;
        $like->utente_id=Auth::user()->id;
        $like->consiglio_id=$request->c_id;
        $like->save();
        return back();
    }

    public function rimuoviVotoConsiglio(Request $request)
    {
         Utente_Consiglio::where('utente_id',Auth::user()->id)->where('consiglio_id',$request->c_id)->delete();
         return back();
    }
}
