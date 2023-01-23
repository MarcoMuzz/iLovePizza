@extends('layouts.app')
@section('title', 'Modera Contenuti')
@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <div style="float: left; position:absolute ">
        <h1>Ricette:</h1>
        @foreach($ricette as $ricetta)
            <h2>{{ $ricetta['nome']}}</h2>
            <p> written by: {{$ricetta['username']}} </p>
            <p><img style="max-width: 150px" src="{{ $ricetta['immagine']}}"><br/></p>
            @if($ricetta['napoletana'] == 1) Pizza Napoletana
            @endif
            @if($ricetta['romana'] == 1) Pizza Romana
            @endif
            @if($ricetta['resto'] == 1) Pizza proveniente dal resto d'Italia
            @endif
            @if($ricetta['internazionale'] == 1) Pizza Internazionale
            @endif
            <a href="{{route('ricetta',['id'=>$ricetta['id']])}}">Continua a leggere</a>
            <br>

            <form action="{{route('eliminaRicetta')}}" method="post">
                @csrf
                <input  type="hidden" name="id" value="{{$ricetta['id']}}$">
                <input  type="submit" value="Elimina">
            </form>
            <br>

            <a class="button" href=" {{route('modificaRicetta',['id'=>$ricetta['id']])}}">Modifica</a>
            <br/>____________________________________________________<br>
        @endforeach
    </div>



    <div style="float: right; position: center ">
        <h1>Consigli:</h1>
        @foreach($consigli as $consiglio)

            <h2>{{ $consiglio['nome']}}</h2>
            <p> written by: {{$consiglio['username']}} </p>
            <p><img style="max-width: 150px" src="{{ $consiglio['immagine']}}"><br/></p>
            <a href="{{route('consiglio',['id'=>$consiglio['id']])}}">Continua a leggere</a>
            <br>

            <form action="{{route('eliminaConsiglio')}}" method="post">
                @csrf
                <input  type="hidden" name="id" value="{{$consiglio['id']}}$">
                <input  type="submit" value="Elimina">
            </form>
            <br>

            <a class="button" href=" {{route('modificaConsiglio',['id'=>$consiglio['id']])}}">Modifica</a>
            <br/>____________________________________________________<br>
        @endforeach
    </div>


@endsection

