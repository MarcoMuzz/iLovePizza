@extends('layouts.master')
@section('title', 'Consiglio')
@section('content')

    @foreach($consiglios as $consiglio)

        <h2>{{ $consiglio['nome']}}</h2>
        @foreach($autores as $autore)
            @if($autore['id'] == $consiglio['id_autore'])
            <p> written by: {{$autore['nome']}} </p>
            @endif
        @endforeach
        <p><img src="{{ $consiglio['immagine']}}"><br/></p>
        <br/>____________________________________________________<br/>
    @endforeach

    @endsection
