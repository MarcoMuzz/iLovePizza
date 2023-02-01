<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ricetta;
use App\Models\Consiglio;
use App\Models\Associazione;

/**
 * Autore: Musciacchio
 */
class RicercaController extends Controller
{
    public function Ricerca(Request $request){
            $ricerca=$request->ricerca;
            $ricettas=Ricetta::where('nome','LIKE','%'.$request->ricerca.'%')->get();
            $consiglios=Consiglio::where('nome','LIKE','%'.$request->ricerca.'%')->get();
            $associaziones=Associazione::where('nome','LIKE','%'.$request->ricerca.'%')->get();
            return view('ricerca',[
                'ricettas'=> $ricettas,
                'ricerca'=>$ricerca,
                'consiglios'=>$consiglios,
                'associaziones'=>$associaziones,
            ]);
         }


}
