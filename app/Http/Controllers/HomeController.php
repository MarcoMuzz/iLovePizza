<?php

namespace App\Http\Controllers;

use App\Models\Ricetta;
use Illuminate\Http\Request;

class HomeController extends Controller
{//another commit
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

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
