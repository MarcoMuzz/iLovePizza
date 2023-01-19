@extends('layouts.app')
@section('title', 'associazione')

@section('content')
    <h1>{{$associaziones['nome']}}<br></h1>
    <div>capo : {{$capo['username']}}<br></div>
    <div>{{$capo['nome']}} {{$capo['cognome']}}<br></div>

    <h1>Membri:</h1>
    @foreach($membri as $membro)
    <div>
        {{$membro['username']}}
        @switch($membro['ruolo'])
            @case(1)
                (Membro)
                @break

            @case(2)
                (Moderatore)
                @break

            @case(3)
                (Capo)
                @break

            @default
                (errore)
        @endswitch
    </div>
    @endforeach


    <div style="float: left; position:absolute ">
        <h1>Ricette:</h1>
        @foreach($ricette as $ricetta)
            <h2>{{ $ricetta['nome']}}</h2>
            <p> written by: {{$ricetta['username']}} </p>
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



    <div style="float: right; position: center ">
        <h1>Consigli:</h1>
        @foreach($consigli as $consiglio)

            <h2>{{ $consiglio['nome']}}</h2>
            <p> written by: {{$consiglio['username']}} </p>
            <p><img style="max-width: 150px" src="{{ $consiglio['immagine']}}"><br/></p>
            <a href="{{route('consiglio',['id'=>$consiglio['id']])}}">Continua a leggere</a>
            <br/>____________________________________________________<br>
        @endforeach
    </div>
@endsection

