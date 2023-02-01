@extends('layouts.app')
@section('title', 'Consiglio')
@section('content')
    <!--
    Autore: Stingi
    -->
    <style>
    .card-img-top{
    height:250px;
    width:auto;
    }

    .card{
        flex:40%;
        margin:3px;
    }

    @media only screen and (max-width: 600px) {
        .card {
            flex:100%;
        }
    }
    </style>
    <div class="container d-flex" style="flex-wrap: wrap">
    @foreach($associaziones as $associazione)
            <br>
            <div class="card  text-center">
                <div class="card-body">
                    <h2 class="card-title">{{ $associazione['nome']}}</h2>
                    @foreach($capos as $capo)
                        @if($capo['id'] == $associazione['utente_id'])
                            <p class="card-text"> Creata da: {{$capo['username']}} </p>
                        @endif
                    @endforeach
                    <a href="{{route('associazione',['id'=>$associazione['id']])}}" class="btn btn-primary">Visita</a>
                </div>
            </div>
    @endforeach
    </div>
    @endsection
