@extends('layouts.app')
@section('title', 'Modera Contenuti')
@section('content')

    <style>
          .card {
            width: 30%;
            text-align: center;
            padding: 2%;
            margin-bottom: 3%;
        }

        h1 {
            text-align: center;
            margin: 2%;
        }

        @media screen and (max-width: 768px) {
            .container {
                display:inline-flex;
            }
            .row{
                width:100%;
                margin-bottom: 3%;
            }
            .col{
                width:100%;
            }
        }

    </style>


    <div class="container">

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-sm text-center">


        <h1>Ricette</h1>
                @if($ricette=='[]')
                    <p>Non ci sono ricette</p>
                @endif
        @foreach($ricette as $ricetta)
                <div class="card" style="width: 25rem;display:inline-flex">
            <h2>{{ $ricetta['nome']}}</h2>
            <p> written by: {{$ricetta['username']}} </p>
            <p><img style="max-width: 80%" src="{{url('/ricette/'.$ricetta['immagine'])}}"><br/></p>
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

                <a class="btn btn-primary m-auto" href=" {{route('modificaRicetta',['id'=>$ricetta['id']])}}">Modifica</a>
                <br>
            <form action="{{route('eliminaRicetta')}}" method="post">
                @csrf
                <input  type="hidden" name="id" value="{{$ricetta['id']}}$">
                <input  type="submit" class="btn btn-danger" value="Elimina Ricetta">
            </form>
            </div>

        @endforeach

            </div>


            <div class="col-sm text-center">
                <h1>Consigli</h1>

                @if($consigli=='[]')
                    <p>Non ci sono consigli</p>
                @endif
                @foreach($consigli as $consiglio)
                    <div class="card" style="width: 25rem;display:inline-flex">
                    <h2>{{ $consiglio['nome']}}</h2>
                    <p> written by: {{$consiglio['username']}} </p>
                    <p><img style="max-width: 80%" src="{{url('/cons/'.$consiglio['immagine'])}}"><br/></p>
                    <a href="{{route('consiglio',['id'=>$consiglio['id']])}}">Continua a leggere</a>
                    <br>
                    <a class="btn btn-primary m-auto" href=" {{route('modificaConsiglio',['id'=>$consiglio['id']])}}">Modifica</a>
                    <br>
                    <form action="{{route('eliminaConsiglio')}}" method="post">
                        @csrf
                        <input  type="hidden" name="id" value="{{$consiglio['id']}}$">
                        <input  type="submit" class="btn btn-danger" value="Elimina Consiglio">
                    </form>
                    </div>

            @endforeach

            </div>


        </div>



@endsection

