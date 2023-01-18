@extends('layouts.master')
@section('title', 'Consiglio')

@section('content')
   <h1>{{$consiglios['nome']}}<br></h1>
   <img src="{{$consiglios['immagine']}}"><br>
   <div>Contenuto : {{$consiglios['contenuto']}}</div>
   <div>Autore : {{$autore['username']}}</div>
   <div>Associazione : {{$associazione['nome']}}</div>
    <h2> Totale like: {{$conto}}</h2><br>

@endsection

