<?php

namespace App\Http\Controllers;
use App\Mail\mailInvito;
use App\Models\Associazione_Utente;
use App\Models\Invito;
use App\Models\Utente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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
        return back()->with('statusRed','Email non valida');
     }

    }

    public function registrazioneInvito($token){
    if(Auth::check()) Auth::logout();
            if(Invito::where('token',$token)->first()!=null){
                $invito= Invito::where('token',$token)->first();
                return view('registrazioneInvito',[
                    'invito'=>$invito

                ]);
            }
            if(Invito::where('token',$token)->first()==null)
            {
                return redirect('/')->with('statusRed','L\'invito non è valido');
            }

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:utentes'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:utentes'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

    }

    public function storeInvitato(Request $request){
    $data=$request->only(['nome', 'username','email','password']);
    if($this->validator($data)==false) return back();

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

    return redirect('/login');

    }

}
