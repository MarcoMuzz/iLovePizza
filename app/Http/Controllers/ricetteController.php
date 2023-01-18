<?php

namespace App\Http\Controllers;
use App\Models\Associazione_Utente;
use App\Models\Ricetta;
use App\Models\Utente;
use App\Models\Associazione;
use App\Models\Utente_Ricetta;
use Illuminate\Http\Request;


class ricetteController extends Controller
{

    public function Ricette($tipologia) {

        switch ($tipologia) {
            case "tutte":
                return view('ricette',['ricettas' => Ricetta::all(), 'autores' => Utente::all()]);
            case "napoletana":
                return view('ricette',['ricettas' => Ricetta::all()->where('napoletana', 1), 'autores' => Utente::all()]);
            case "romana":
                return view('ricette',['ricettas' => Ricetta::all()->where('romana', 1), 'autores' => Utente::all()]);
            case "resto":
                return view('ricette',['ricettas' => Ricetta::all()->where('resto', 1), 'autores' => Utente::all()]);
            case "internazionale":
                return view('ricette',['ricettas' => Ricetta::all()->where('internazionale', 1), 'autores' => Utente::all()]);
        }


    }

    public function Ricetta($id) {
        $conto=Utente_Ricetta::where('id_ricetta','=', $id)->count();
        $ricetta=Ricetta::where('id', '=',$id)->first();
        $autore=Utente::where('id','=',$ricetta['id_autore'])->first();
        $associazione=Associazione_Utente::where('id_utente',$autore['id'])->first();
        $media=Utente_Ricetta::where('id_ricetta',$ricetta['id'])->avg('voto');
        $media=round($media,1);
        return view('ricetta',[
            'ricettas'=>$ricetta,
            'autore'=>$autore,
            'conto'=>$conto,
            'associazione'=>$associazione,
            'media'=>$media
        ]);
    }


}
