@extends('layouts.app')
@section('title', 'Ricetta')

@section('content')
    <!--
    Autore: Musciacchio
    -->

    <style>
        .card {
            flex-direction: row;
            margin-bottom: 2%;
            max-height: 350px;
        }
        .card-title {
            font-weight: bold;
        }
        .card img {
            object-fit: cover;
            width:400px;
        }
        p {
            margin-top: 2%;
        }
        #p1 {
            color: grey;
        }
        @media only screen and (max-width: 768px) {
            .card-body {
                padding: 0.5em 1.2em;
            }
            .card-body .card-text {
                margin: 0;
            }
            .card img {
                width: 100%;
                object-fit: cover;
                border-top-right-radius: 4px;
                border-top-left-radius: 4px;
            }
            .card{
                width: 100%;
                flex-direction: column;
                max-height: 0%;
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
            background-color:rgb(0,0,0,0);
            box-shadow: none;
        }

    </style>

    <div class="container">

        <div class="pagi">{!!$ricettas->links()!!} </div>
    @foreach($ricettas as $ricetta)
        <br>
        <div class="card">
            <img src="{{url('/ricette/'.$ricetta['immagine'])}}" />
            <div class="card-body">
                <h2 class="card-title">{{ $ricetta['nome']}}</h2>
                <h5 class="card-text">
                    @foreach($autores as $autore)
                        @if($autore['id'] == $ricetta['utente_id'])
                           <strong> Scritta da: {{$autore['username']}} </strong>
                            <p id="p1"> {{$ricetta['preparazione']}}</p>
                        @endif

                    @endforeach
                      {{--   <p id="p1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo.... <br> </p>--}}
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
