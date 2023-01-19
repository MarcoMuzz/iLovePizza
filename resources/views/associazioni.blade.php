@extends('layouts.app')
@section('title', 'Consiglio')
@section('content')

    @foreach($associaziones as $associazione)

        <h2>{{ $associazione['nome']}}</h2>
        @foreach($capos as $capo)
            @if($capo['id'] == $associazione['utente_id'])
            <p> founded by: {{$capo['nome']}} </p>
            @endif
        @endforeach
        <a href="{{route('associazione',['id'=>$associazione['id']])}}">Visita</a>
        <br/>____________________________________________________<br/>
    @endforeach

    @endsection
