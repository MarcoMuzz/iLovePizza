@extends('layouts.master')
@section('title', 'Home')

@section('content')

    <h1>Benvenuto in iLovePizza (and piedi)</h1>
    <h2>Pizze Napoletane</h2>
    <h3>La pizza napoletana con pasta morbida e sottile, ma dai bordi alti, è la versione della pizza tonda preparata nella città di Napoli. Dal 5 febbraio 2010 è ufficialmente riconosciuta come Specialità Tradizionale Garantita(STG) dell'Unione Europea e nel 2017 l'arte del pizzaiuolo napoletano, di cui la pizza napoletana è il prodotto tangibile, è stata dichiarata dall'UNESCO come patrimonio immateriale dell'umanità.</h3>
    <div style=" width: 100%; height: 230px;">

        @foreach($napoletana as $pizzanapoletana)
        <div style="width: 30vw;float:left; text-align: center ; display: inline-block;border: solid 1px black;border-radius: 5%">
            <img  width=auto height="200" src="{{$pizzanapoletana['immagine']}}"><br>
            <a href=" {{route('ricetta',['id'=> $pizzanapoletana['id'] ])}} ">{{$pizzanapoletana['nome']}}</a>
        </div>
        @endforeach

    </div><br>


    <h2>Pizze Romane</h2>
    <div style=" width: 100%; height: 230px;">

        @foreach($romana as $pizzaromana)
            <div style="width: 30vw;float:left; text-align: center ; display: inline-block;border: solid 1px black;border-radius: 5%">
                <img  width=auto height="200" src="{{$pizzaromana['immagine']}}"><br>
            <a href=" {{route('ricetta',['id'=> $pizzaromana['id'] ])}} ">{{$pizzaromana['nome']}}</a>
            </div>
        @endforeach

    </div><br>

    <h2>Pizze resto'dItalia</h2>
    <div style=" width: 100%; height: 230px;">

        @foreach($resto as $pizzaresto)
            <div style="width: 30vw;float:left; text-align: center ; display: inline-block;border: solid 1px black;border-radius: 5%">
                <img  width=auto height="200" src="{{$pizzaresto['immagine']}}"><br>
                <a href=" {{route('ricetta',['id'=> $pizzaresto['id'] ])}} ">{{$pizzaresto['nome']}}</a>
            </div>
        @endforeach

    </div><br>

    <h2>Pizze Internazionali</h2>
    <div style=" width: 100%; height: 230px;">

        @foreach($internazionale as $pizzaInternazionale)
            <div style="width: 30vw;float:left; text-align: center ; display: inline-block;border: solid 1px black;border-radius: 5%">
                <img  width=auto height="200" src="{{$pizzaInternazionale['immagine']}}"><br>
                <a href=" {{route('ricetta',['id'=> $pizzaInternazionale['id'] ])}} ">{{$pizzaInternazionale['nome']}}</a>
            </div>
        @endforeach

    </div>

@endsection

