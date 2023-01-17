@extends('layouts.master')
@section('title', 'Profilo Utente')
@section('content')
    <h5>{{ $utente['username']}}</h5><br/>
    <p>
        Nome:{{ $utente['nome']}}<br/>
        Cognome:{{ $utente['cognome'] }}<br/>
        Email:{{ $utente['email'] }}<br/>

        @if($associazione!= 'null')
            Associazione:{{ $associazione['nome'] }}<br/>
    @endif

@endsection

