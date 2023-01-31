@extends('layouts.app')
@section('title', 'Modera Contenuti')
@section('content')

    <style>
        .card {
            width: 30%;
            text-align: center;
            justify-content: center;
            padding: 1%;
            margin: 0 auto;
        }
        .container{
            display: flex;
        }
        h1 {
            text-align: center;
            margin: 2%;
        }
        @media screen and (max-width: 950px) {
            .container {
                display: inline-block;
            }
            .card{
                width:75%;
                margin-bottom: 3%;
            }
        }

    </style>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif



        <h1>Ricette</h1>
    <div class="container">

        @foreach($ricette as $ricetta)
            <div class="card ">
            <h2>{{ $ricetta['nome']}}</h2>
            <p> written by: {{$ricetta['username']}} </p>
            <p><img style="max-width: 80%" src="{{ $ricetta['immagine']}}"><br/></p>
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

                <a class="button" href=" {{route('modificaRicetta',['id'=>$ricetta['id']])}}">Modifica</a>
                <br>
            <form action="{{route('eliminaRicetta')}}" method="post">
                @csrf
                <input  type="hidden" name="id" value="{{$ricetta['id']}}$">
                <input  type="submit" class="btn btn-danger" value="Elimina Ricetta">
            </form>


            </div>
        @endforeach

    </div>


        <h1>Consigli</h1>
    <div class="container">
            @foreach($consigli as $consiglio)
                <div class="card">
                <h2>{{ $consiglio['nome']}}</h2>
                <p> written by: {{$consiglio['username']}} </p>
                <p><img style="max-width: 80%" src="{{ $consiglio['immagine']}}"><br/></p>
                <a href="{{route('consiglio',['id'=>$consiglio['id']])}}">Continua a leggere</a>
                <br>
                    <a class="button" href=" {{route('modificaConsiglio',['id'=>$consiglio['id']])}}">Modifica</a>
                    <br>
                <form action="{{route('eliminaConsiglio')}}" method="post">
                    @csrf
                    <input  type="hidden" name="id" value="{{$consiglio['id']}}$">
                    <input  type="submit" class="btn btn-danger" value="Elimina Consiglio">
                </form>
                <br>
                </div>

            @endforeach

    </div>




@endsection

