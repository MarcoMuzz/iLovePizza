<?php

namespace App\Http\Controllers;
use App\Models\Associazione_Utente;
use App\Models\Ricetta;
use App\Models\Utente;
use App\Models\Associazione;
use App\Models\Utente_Ricetta;
use App\Models\Commento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Autore: Musciacchio
 */
class ricetteController extends Controller
{

    public function Ricette($tipologia) {

        switch ($tipologia) {
            case "tutte":
                return view('ricette',['ricettas' =>Ricetta::paginate(5) , 'autores' => Utente::all()]);
            case "napoletana":
                return view('ricette',['ricettas' => Ricetta::where('napoletana', 1)->paginate(5), 'autores' => Utente::all()]);
            case "romana":
                return view('ricette',['ricettas' => Ricetta::where('romana', 1)->paginate(5), 'autores' => Utente::all()]);
            case "resto":
                return view('ricette',['ricettas' => Ricetta::where('resto', 1)->paginate(5), 'autores' => Utente::all()]);
            case "internazionale":
                return view('ricette',['ricettas' => Ricetta::where('internazionale', 1)->paginate(5), 'autores' => Utente::all()]);

        }
    }

    public function Ricetta($id) {
        $conto=Utente_Ricetta::where('ricetta_id','=', $id)->count();
        $ricetta=Ricetta::find($id);
        $autore=Ricetta::find($id)->Utente;
        $associazione=Ricetta::find($id)->Associazione;
        $media=Ricetta::find($id)->Voti->avg('voto');
        $media=round($media,1);
        $commentos=Ricetta::find($id)->Commenti;
        $votoPersonale=0;
        if(Auth::check())
        {
            if(Utente::find(Auth::user()->id)->Utente_Ricetta->where('ricetta_id','=',$id)->first()!=null)
            {
                $votoPersonale=Utente::find(Auth::user()->id)->Utente_Ricetta->where('ricetta_id','=',$id)->first()->voto;
            }
        }


        return view('ricetta',[
            'ricettas'=>$ricetta,
            'autore'=>$autore,
            'conto'=>$conto,
            'associazione'=>$associazione,
            'media'=>$media,
            'commentos'=>$commentos,
            'votoPersonale'=>$votoPersonale
        ]);
    }

    public function creaRicetta()
    {
        $temp=Auth::user()->Associazione_Utente;
        // Auth::user() prende la tupla dell'utente autenticato dalla tabella utentes
        // con '->Associazione_Utente' associa la tupla precedente a quella della tabella Associazione_Utente in cui si trova l'id dell'associazione a cui l'utente appartiene
        $associazione=Associazione::find($temp['associazione_id']);
        // con il comando di sopra si va a trovare i dati dell'associazione relativi a quella il cui id è presente nella tupla trovata precedentemente
        return view('creaRicetta', [
            'associazione'=> $associazione
        ]);
    }

    public function storeRicetta(Request $request)
    {
        $ricetta = new Ricetta;
        $ricetta->nome = $request->nome;
        $ricetta->ingredienti = $request->ingredienti;
        $ricetta->preparazione = $request->preparazione;

        switch ($request->tipologia) {
            case 'napoletana':
                $ricetta->napoletana = 1;
                break;
            case 'romana':
                $ricetta->romana = 1;
                break;
            case 'internazionale':
                $ricetta->internazionale = 1;
                break;
            case 'resto':
                $ricetta->resto = 1;
                break;
        }
        $ricetta->cottura = $request->cottura;
        $file = $request->file('immagine');
        $estensione =$request->file('immagine')->getClientOriginalExtension();
        $nomefile = time().'.'.$estensione;
        $file->move('ricette', $nomefile);
        $ricetta->immagine=$nomefile;
        $ricetta->utente_id = Auth::user()->id;

        $ricetta->save();
        return redirect('/crearicetta')->with('status', 'Ricetta creata correttamente');
    }

    public function eliminaRicetta(Request $request)
    {
        Ricetta::where('id',$request->id)->delete();
        return redirect()->route('moderaContenuti')->with('status', 'Ricetta eliminata');
    }

    public function modificaRicetta($id)
    {
        return view('modificaRicetta',[
            'id'=>$id,
            'associazione'=>Auth::user()->Associazione,
            'ricetta'=>Ricetta::find($id)
        ]);
    }

    public function updateRicetta(Request $request)
    {
        $napoletana=0;
        $romana=0;
        $internazionale=0;
        $resto=0;
        switch ($request->tipologia) {
            case 'napoletana':
                $napoletana= 1;
                break;
            case 'romana':
                $romana = 1;
                break;
            case 'internazionale':
                $internazionale = 1;
                break;
            case 'resto':
                $resto = 1;
                break;
        }

        Ricetta::find($request->id)->update([
            'nome'=>$request->nome,
            'ingredienti'=>$request->ingredienti,
            'preparazione'=>$request->preparazione,
            'romana'=>$romana,
            'napoletana'=>$napoletana,
            'resto'=>$resto,
            'internazionale'=>$internazionale,
            'cottura'=>$request->cottura
        ]);

        return redirect()->route('moderaContenuti')->with('status', 'Ricetta modificata');
    }

    public function votaRicetta(Request $request)
    {
        $voto= new Utente_Ricetta;
        $voto->utente_id=Auth::user()->id;
        $voto->ricetta_id=$request->r_id;
        $voto->voto=$request->voto;
        $voto->save();
        return back();
    }


}
