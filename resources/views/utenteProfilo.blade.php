@extends('layouts.master')
@section('title', 'Profilo Utente')
@section('content')

    @foreach($membri as $membro)
    {{$membro['username']}}<br>
    @endforeach
@endsection

