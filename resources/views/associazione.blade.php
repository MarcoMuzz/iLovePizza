@extends('layouts.master')
@section('title', 'associazione')

@section('content')
    <h1>{{$associaziones['nome']}}<br></h1>
    <div>capo : {{$capo['nome']}}</div>

    @foreach($membri as $membro)
    <div> membri : {{$membro['username']}}</div>
    @endforeach

@endsection

