<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ricetta;

/**
 * Autore: Venuto
 */
class homepageController extends Controller
{
    public function homepage(){

        $romana= Ricetta::where('romana',1)
            ->take(3)
            -> get()
        ;

        $napoletana= Ricetta::where('napoletana',1)
            ->take(3)
            -> get()
        ;

        $resto= Ricetta::where('resto',1)
            ->take(3)
            -> get()
        ;

        $internazionale= Ricetta::where('internazionale',1)
            ->take(3)
            -> get()
        ;
        return view('homepage',[
                'romana'=>$romana,
                'napoletana'=>$napoletana,
                'resto'=>$resto,
                'internazionale'=>$internazionale
            ]
        );
    }
}
