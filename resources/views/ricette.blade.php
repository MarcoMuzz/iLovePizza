@extends('layouts.master')
@section('title', 'Ricetta')

@section('content')
    @foreach($ricettas as $ricetta)

        <h2>{{ $ricetta['nome']}}</h2>
        @foreach($autores as $autore)
            @if($autore['id'] == $ricetta['id_autore'])
            <p> written by: {{$autore['nome']}} </p>
            @endif
        @endforeach
        <p><img src="{{ $ricetta['immagine']}}"><br/></p>
                @if($ricetta['napoletana'] == 1) Pizza Napoletana
             @endif
        @if($ricetta['romana'] == 1) Pizza Romana
        @endif
        @if($ricetta['resto'] == 1) Pizza proveniente dal resto d'Italia
        @endif
        @if($ricetta['internazionale'] == 1) Pizza Internazionale
        @endif
        <br/>____________________________________________________<br/>
    @endforeach

    @endsection
