@extends('layouts.app')
@section('title', 'profilo')

@section('content')
    Username: {{$utente['username']}} <br>
    Nome: {{$utente['nome']}} <br>
    Cognome: {{$utente['cognome']}} <br>
    Email: {{$utente['email']}} <br>
    @if($associazione != null)
    Associazione: {{$associazione['nome']}} <br>
    Ruolo:
        @if(Auth::user()->custom ==1)
            Membro
        @endif

        @if(Auth::user()->custom ==2)
            Moderatore
        @endif

        @if(Auth::user()->custom ==3)
            Capo
        @endif
    @endif

@endsection

