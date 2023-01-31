@extends('layouts.app')
@section('title', 'Ricetta')

@section('content')
    <style>
        .card {
            flex-direction: row;
            margin-bottom: 2%;
        }
        .card-title {
            font-weight: bold;
        }
        .card img {
            object-fit: cover;
            width:35%;
        }
        p {
            margin-top: 2%;
        }
        #p1 {
            color: grey;
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
                width: 100%;
            }
            .card{
                width: 75%;
                flex-direction: column;
            }

            #p1{

                font-size: 95%;
                width: 250px;
                margin-top: 5%;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
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
                           <strong> Scritta da: {{$autore['username']}} </strong>
                        @endif
                    @endforeach
                        <p id="p1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo.... <br> </p>
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
