@extends('layouts.master')
@section('title', 'Ricetta')

@section('content')
   <h1>{{$ricettas['nome']}}<br></h1>
   <img src="{{$ricettas['immagine']}}"><br>
   <div>Ingredienti : {{$ricettas['ingredienti']}}</div>
   <div>Preparazione : {{$ricettas['preparazione']}}</div>
    <h2> Valutazione Media: {{$media}}</h2><br>
   <h2>Numero voti: {{$conto}}</h2>


    <h1>Sezione Commenti</h1>
   @foreach($commentos as $commento)
       {{$commento['contenuto']}}<br>
       @endforeach

@endsection

