@extends('layouts.master')
@section('title', 'Consiglio')
@section('content')

    @foreach($consiglios as $consiglio)

        <h2>{{ $consiglio['nome']}}</h2>
        @foreach($autores as $autore)
            @if($autore['id'] == $consiglio['utente_id'])
            <p> written by: {{$autore['nome']}} </p>
            @endif
        @endforeach
        <p><img style="max-width: 200px" src="{{ $consiglio['immagine']}}"><br/></p>
        <a href="{{route('consiglio',['id'=>$consiglio['id']])}}">Continua a leggere</a>
        <br/>____________________________________________________<br/>
    @endforeach

    @endsection
