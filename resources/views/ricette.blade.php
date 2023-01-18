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
        <p><img style="max-width: 200px" src="{{ $ricetta['immagine']}}"><br/></p>
                @if($ricetta['napoletana'] == 1) Pizza Napoletana
             @endif
        @if($ricetta['romana'] == 1) Pizza Romana
        @endif
        @if($ricetta['resto'] == 1) Pizza proveniente dal resto d'Italia
        @endif
        @if($ricetta['internazionale'] == 1) Pizza Internazionale
        @endif
        <a href="{{route('ricetta',['id'=>$ricetta['id']])}}">Continua a leggere</a>
        <br/>____________________________________________________<br/>

    @endforeach

    @endsection
