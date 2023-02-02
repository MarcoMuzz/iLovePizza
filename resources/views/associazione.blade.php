@extends('layouts.app')
@section('title', 'associazione')

@section('content')
    <!--
    Autore: Stingi
    -->
    <style>
        .scroll{

            overflow:scroll;
            height:600px;
        }

        #p1 {
            color: grey;
        }

        @media only screen and (max-width: 768px) {
            .table{
                width:100%;
            }

        }
    </style>

    <div class="container">

        <div class="text-center"><h1>{{$associaziones['nome']}}<br></h1> </div>
        <p>{{$associaziones['descrizione']}}


        </p>
        <div class="text-center"><h2>Lista Membri<br></h2> </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">Username</th>
                <th scope="col">Ruolo</th>
            </tr>
            </thead>
            <tbody>
            @foreach($membri as $membro)
                <tr>
                    <td> {{$membro['nome']}}</td>
                    <td>{{$membro['cognome']}}</td>
                    <td>{{$membro['username']}}</td>
                    <td> @switch($membro['ruolo'])
                            @case(1)
                                Membro
                                @break

                            @case(2)
                                Moderatore
                                @break

                            @case(3)
                                Capo
                                @break
                        @endswitch</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <h1>Ricette:</h1>
                <div class="scroll">

                @foreach($ricette as $ricetta)
                    <div class="card">
                        <img src="{{url('/ricette/'.$ricetta['immagine'])}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$ricetta['nome']}}</h5>
                            <p id="p1"> {{$ricetta['preparazione']}}</p>
                            <a href="{{route('ricetta',['id'=> $ricetta['id'] ])}}" class="btn btn-primary">Guarda</a>
                        </div>
                    </div>
                    <br><br>
                @endforeach
            </div>
            </div>

            <div class="col-sm-6 col-md-4"> </div>
            <div class="col-sm-6 col-md-4">
                <h1>Consigli:</h1>
                <div class="scroll">
                @foreach($consigli as $consiglio)
                    <div class="card">
                        <img  src="{{url('/cons/'.$consiglio['immagine'])}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$consiglio['nome']}}</h5>
                            <p class="card-text">Lorem Ipssum dolor</p>
                            <a href="{{route('consiglio',['id'=> $consiglio['id'] ])}}" class="btn btn-primary">Guarda</a>
                        </div>
                    </div>
                    <br><br>
                @endforeach
                </div>
            </div>




        </div>



    </div>

    {{--
    <h1>{{$associaziones['nome']}}<br></h1>
    <div>capo : {{$capo['username']}}<br></div>
    <div>{{$capo['nome']}} {{$capo['cognome']}}<br></div>

    <h1>Membri:</h1>
    @foreach($membri as $membro)
    <div>
        {{$membro['username']}}
        @switch($membro['ruolo'])
            @case(1)
                (Membro)
                @break

            @case(2)
                (Moderatore)
                @break

            @case(3)
                (Capo)
                @break

            @default
                (errore)
        @endswitch
    </div>
    @endforeach


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
            <br/>____________________________________________________<br>
        @endforeach


    </div>
    --}}
@endsection

