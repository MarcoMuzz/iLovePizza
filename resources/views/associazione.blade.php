@extends('layouts.master')
@section('title', 'associazione')

@section('content')
    <h1>{{$associaziones['nome']}}<br></h1>
    <div>capo : {{$capo['username']}}<br></div>
    <div>{{$capo['nome']}} {{$capo['cognome']}}<br></div>


    <h1>Membri:</h1>
    @foreach($membri as $membro)
    <div>ISS: {{$membro['username']}}</div>
    @endforeach

@endsection

