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
<hr>
    @if($ricette!=null)
    <div style="float: left; position:absolute " >
        <h2>Le mie ricette:</h2>
    @foreach($ricette as $ricetta)
        <h2>{{ $ricetta['nome']}}</h2>
        <p><img style="max-width: 150px" src="{{ $ricetta['immagine']}}"><br/></p>
        @if($ricetta['napoletana'] == 1) Pizza Napoletana
        @endif
        @if($ricetta['romana'] == 1) Pizza Romana
        @endif
        @if($ricetta['resto'] == 1) Pizza proveniente dal resto d'Italia
        @endif
        @if($ricetta['internazionale'] == 1) Pizza Internazionale
        @endif
        <a href="{{route('ricetta',['id'=>$ricetta['id']])}}">Continua a leggere</a>
        <br/>____________________________________________________<br>
    @endforeach
    </div>
    @endif

    @if($consigli!=null)
    <div style="float: right; position: center ">
        <h2>I miei consigli:</h2>
    @foreach($consigli as $consiglio)

        <h2>{{ $consiglio['nome']}}</h2>
        <p><img style="max-width: 150px" src="{{ $consiglio['immagine']}}"><br/></p>
        <a href="{{route('consiglio',['id'=>$consiglio['id']])}}">Continua a leggere</a>
        <br/>____________________________________________________<br>
    @endforeach
    @endif
    </div>
@endsection

