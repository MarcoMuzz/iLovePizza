@extends('layouts.app')
@section('title', 'Ricerca')
@section('content')

    <div class="container" style="width:100%">
        <h2>Risultati per "{{$ricerca}}"...</h2><br><br><br>
        <div style="width:33%;float:left">
            <h3>Ricette</h3>
      @foreach($ricettas as $ricetta)
                <img  width=auto  height=100px src="{{$ricetta['immagine']}}"><br>
                <a href=" {{route('ricetta',['id'=> $ricetta['id'] ])}} ">{{$ricetta['nome']}}</a>

        <br/><hr>
    @endforeach
        </div>

        <div style="width:33%;float:left">
            <h3>Consigli</h3>
            @foreach($consiglios as $consiglio)
                <img style="max-width: 200px" src="{{ $consiglio['immagine']}}"><br/></p>
                <a href="{{route('consiglio',['id'=>$consiglio['id']])}}">{{$consiglio['nome']}}</a>
                <br/><hr>
            @endforeach
        </div>

        <div style="width:33%;float:right">
            <h3>Associazioni</h3>
            @foreach($associaziones as $associazione)
                {{$associazione['nome']}}
                <a href="{{route('associazione',['id'=>$associazione['id']])}}">Visita</a>
                <br/><hr>
            @endforeach

        </div>
        </div>
@endsection
