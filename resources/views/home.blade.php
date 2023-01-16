@extends('layouts.master')
@section('title', 'Home')

@section('content')



    <h1>Benvenuto in iLovePizza (and piedi)</h1>
    <h2>Pizze Napoletane</h2>
    <h3>La pizza napoletana con pasta morbida e sottile, ma dai bordi alti, è la versione della pizza tonda preparata nella città di Napoli. Dal 5 febbraio 2010 è ufficialmente riconosciuta come Specialità Tradizionale Garantita(STG) dell'Unione Europea e nel 2017 l'arte del pizzaiuolo napoletano, di cui la pizza napoletana è il prodotto tangibile, è stata dichiarata dall'UNESCO come patrimonio immateriale dell'umanità.</h3>
    <div style=" background-color: #a0aec0; width: 100%; height: 200px">

        @foreach($romana as $pizzaromana)
        <div style="width: 30vw;float:left; display: inline-block;border: solid 1px black;border-radius: 5%">
            <img width="400" height="170" src="{{$pizzaromana['immagine']}}"><br>{{$pizzaromana['nome']}}</div>
        @endforeach

    </div><br>


    <h2>Pizze Romane</h2>
    <div style=" background-color: #a0aec0; width: 100%; height: 200px">
        <div style="width: 30vw;float:left; display: inline-block;border: solid 1px black;border-radius: 5%">Pizza1</div>
        <div style="width: 30vw;display: inline-block; border: solid 1px black;border-radius: 5%">Pizza2</div>
        <div style="width: 30vw;float:right; display: inline-block;border: solid 1px black;border-radius: 5%">Pizza3</div>
    </div><br>

    <h2>Pizze resto'dItalia</h2>
    <div style=" background-color: #a0aec0; width: 100%; height: 200px">
        <div style="width: 30vw;float:left; display: inline-block;border: solid 1px black;border-radius: 5%">Pizza1</div>
        <div style="width: 30vw;display: inline-block; border: solid 1px black;border-radius: 5%">Pizza2</div>
        <div style="width: 30vw;float:right; display: inline-block;border: solid 1px black;border-radius: 5%">Pizza3</div>
    </div><br>

    <h2>Pizze Internazionali</h2>
    <div style=" background-color: #a0aec0; width: 100%; height: 200px">
        <div style="width: 30vw;float:left; display: inline-block;border: solid 1px black;border-radius: 5%">Pizza1</div>
        <div style="width: 30vw;display: inline-block; border: solid 1px black;border-radius: 5%">Pizza2</div>
        <div style="width: 30vw;float:right; display: inline-block;border: solid 1px black;border-radius: 5%">Pizza3</div>
    </div>

@endsection
