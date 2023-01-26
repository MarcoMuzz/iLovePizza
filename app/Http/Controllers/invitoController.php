<?php

namespace App\Http\Controllers;
use App\Mail\mailInvito;
use App\Models\Invito;
use App\Models\Utente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class invitoController extends Controller
{
    private function checkEmail($email){
        if(Utente::where('email',$email)->first()==null){
            return true;
        }else {
            return false;}

    }

    private function creaToken(){
        $token= Str::random(10);
        return $token;
    }
    public function inserisciMail(){

        //$capoDi=Auth::user()->Associazione;

        return view('invito');

    }
    public function inviaInvito(Request $request){
       if($this->checkEmail($request->email)==true){
            $token=$this->creaToken();
            $invito=new Invito;
            $invito->utente_mail=$request->email;
            $invito->associazione_id=$request->associazione_id;
            $invito->token=$token;

            $invito->save();

           Mail::to($request->email)->send(new mailInvito($invito));

           return back()->with('status','Invito inviato!');

      }else{
        return back()->with('status','Email non valida');
     };

    }

public function registrazioneInvito($token){

        if(Invito::where('token',$token)->first()!=null){
            $invito= Invito::where('token',$token)->first();
            return view('registrazioneInvito',[
                'invito'=>$invito

            ]);
        }else return 'VAFFANCULO'

  ;
}

}
