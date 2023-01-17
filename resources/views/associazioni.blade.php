@extends('layouts.master')
@section('title', 'Consiglio')
@section('content')

    @foreach($associaziones as $associazione)

        <h2>{{ $associazione['nome']}}</h2>
        @foreach($capos as $capo)
            @if($capo['id'] == $associazione['id_capo'])
            <p> founded by: {{$capo['nome']}} </p>
            @endif
        @endforeach
        <br/>____________________________________________________<br/>
    @endforeach

    @endsection
