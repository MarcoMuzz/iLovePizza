<?php

namespace App\Http\Controllers;
use App\Mail\mailInvito;
use App\Models\Associazione;
use App\Models\Associazione_Utente;
use App\Models\Invito;
use App\Models\Utente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class invitoController extends Controller
{
    private function checkEmail($email){
        if(Utente::where('email',$email)->first()==null){
            return 0; //email non presente nel db
        }
        else{
            if(Utente::where('email',$email)->first()->Associazione_Utente==null) return 1; //email appartiene ad un untente iscritto
            if(Utente::where('email',$email)->first()->Associazione_Utente->ruolo>=1) return 2; //email appartiene ad un untente che fa gia parte di un'associazione
        }
        return null;


    }

    private function creaToken(){
        $token= Str::random(10);
        while(Invito::where('token',$token)->first()!=null){
            $token= Str::random(10);
        }
        return $token;
    }

    public function inserisciMail(){

        //$capoDi=Auth::user()->Associazione;

        return view('invito');

    }

    public function inviaInvito(Request $request){
       if($this->checkEmail($request->email)<=1){
            $token=$this->creaToken();
            $invito=new Invito;
            $invito->utente_mail=$request->email;
            $invito->associazione_id=$request->associazione_id;
            $invito->token=$token;

            $invito->save();

           Mail::to($request->email)->send(new mailInvito($invito));

           return back()->with('status','Invito inviato!');

       }
       elseif($this->checkEmail($request->email)==2){
           return back()->with('statusRed','L\'email appartiene ad un utente che è già membro di un associazione');
       }
       elseif($this->checkEmail($request->email)==null){
           return back()->with('statusRed','Email non valida');
       }
    }

    public function registrazioneInvito($token){
        if(Invito::where('token',$token)->first()==null)
        {
            return redirect('/')->with('statusRed','L\'invito non è valido');
        }
        else
        {
            $invitoEmail=Invito::where('token',$token)->first()->utente_mail;
            $associazione_id=Invito::where('token',$token)->first()->associazione_id;
            $invito= Invito::where('token',$token)->first();
            if(Auth::check()){
                if(Auth::user()->email==$invitoEmail){//ramo registrazione di utente presente nel db e gia loggato
                    $this->collegamentoUtAss(Auth::user()->id, $associazione_id);
                    return redirect('/')->with('status','Invito ad associazione accettato!');
                }
                else{//ramo registrazione di utente presente nel db e gia loggato ma con un profilo diverso da quello dell'invito
                    return redirect('/')->with('statusRed','Per accettare l\'invito devi prima fare il logout dall\'attuale profilo');
                }
            }
            else{
                if(Utente::where('email',$invitoEmail)->first()==null)
                {
                    return view('registrazioneInvito',[ //ramo registrazione di utente non presente nel db
                        'invito'=>$invito
                    ]);
                }
                else
                {
                    return redirect('/')->with('statusRed','Per accettare l\'invito devi prima fare il login con il profilo invitato :'.$invitoEmail);
                }
            }
        }
    }

    private function collegamentoUtAss($u_id,$a_id){
        $membro= new Associazione_Utente;
        $membro->utente_id=$u_id;
        $membro->associazione_id=$a_id;
        $membro->ruolo=1;
        $membro->save();
        return 0;
    }


    public function storeInvitato(Request $request){
        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:utentes'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:utentes'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $utente= new Utente;
        $utente->nome= $request->nome;
        $utente->cognome= $request->cognome;
        $utente->username= $request->username;
        $utente->email= $request->email;
        $utente->password=  Hash::make($request->password);
        $utente->save();

        $membro= new Associazione_Utente;
        $membro->utente_id= $utente->id;
        $membro->associazione_id = $request->associazione_id;
        $membro->ruolo= 1;
        $membro->save();

        Invito::where('utente_mail',$request->email)->delete();
        Auth::loginUsingId($utente->id);
        return redirect('/');

    }

}
