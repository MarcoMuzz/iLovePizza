@extends('layouts.app')
@section('title', 'modifica Consiglio')

@section('content')

{{--$associazione--}}

<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Modifica il consiglio
        </div>
        <div class="card-body">
            <form method="GET" action="{{route('updateConsiglio')}}">
                @csrf
                <div class="form-group">
                    <label>Nome</label>
                    <textarea name="nome" class="form-control" required>{{$consiglio['nome']}}</textarea>
                </div>


                <div class="form-group">
                    <label>Contenuto</label>
                    <textarea name="contenuto" class="form-control" required>{{$consiglio['contenuto']}}</textarea>
                </div>


                <input  type="hidden" name="id" value="{{$consiglio['id']}}">
                <button type="submit" class="btn btn-primary">Applica modifiche</button>
            </form>
        </div>
    </div>
</div>
</body>

@endsection
