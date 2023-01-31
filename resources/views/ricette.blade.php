@extends('layouts.app')
@section('title', 'Ricetta')

@section('content')
    <style>
        .card {
            flex-direction: row;
            align-items: center;
        }
        .card-title {
            font-weight: bold;
        }
        .card img {
            width: 30%;
            border-top-right-radius: 0;
            border-bottom-left-radius: calc(0.25rem - 1px);
        }
        @media only screen and (max-width: 768px) {
            a {
                display: none;
            }
            .card-body {
                padding: 0.5em 1.2em;
            }
            .card-body .card-text {
                margin: 0;
            }
            .card img {
                width: 50%;
            }
        }
        @media only screen and (max-width: 1200px) {
            .card img {
                width: 40%;
            }
        }

        .pagi nav{
            background-color:#f8fafc;
            box-shadow: none;
        }

    </style>
    <div class="container">

        <div class="pagi">{!!$ricettas->links()!!} </div>
    @foreach($ricettas as $ricetta)
        <br>
        <div class="card">
            <img src="{{ $ricetta['immagine']}}" class="card-img-top" />
            <div class="card-body">
                <h2 class="card-title">{{ $ricetta['nome']}}</h2>
                <h5 class="card-text">
                    @foreach($autores as $autore)
                        @if($autore['id'] == $ricetta['utente_id'])
                            Scritta da: {{$autore['username']}}
                        @endif
                    @endforeach
                </h5>
                <p>
                    @if($ricetta['napoletana'] == 1) Pizza Napoletana
                    @endif
                    @if($ricetta['romana'] == 1) Pizza Romana
                    @endif
                    @if($ricetta['resto'] == 1) Pizza proveniente dal resto d'Italia
                    @endif
                    @if($ricetta['internazionale'] == 1) Pizza Internazionale
                    @endif

                </p>
                <a href="{{route('ricetta',['id'=>$ricetta['id']])}}" class="btn btn-primary">Continua a leggere</a>
            </div>
        </div>


    @endforeach
        <br>


    @endsection
