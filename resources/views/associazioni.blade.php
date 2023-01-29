@extends('layouts.app')
@section('title', 'Consiglio')
@section('content')

    <div class="container-lg d-flex" style="flex-wrap: wrap">
    @foreach($associaziones as $associazione)
            <br>
            <div class="card  text-center" style="flex:40%;margin: 3px">
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
