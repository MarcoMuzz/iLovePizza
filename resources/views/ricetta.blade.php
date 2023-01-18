@extends('layouts.master')
@section('title', 'Ricetta')

@section('content')
   <h1>{{$ricettas['nome']}}<br></h1>
   <img src="{{$ricettas['immagine']}}"><br>
    <h2> Valutazione Media: {{$media}}</h2><br>
   <h2>Numero voti: {{$conto}}</h2>

@endsection

