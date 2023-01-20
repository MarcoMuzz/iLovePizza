@extends('layouts.app')
@section('title', 'Profilo Utente')
@section('content')

    {{$ut}}
    <br>
    {{Auth::user()->custom}}
@endsection

