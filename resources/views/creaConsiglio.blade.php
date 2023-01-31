@extends('layouts.app')
@section('title', 'Crea Consiglio')

@section('content')

{{--$associazione--}}

<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            Crea un nuovo consiglio
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('storeconsiglio')}}"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" id="title" name="nome" class="form-control" required>
                </div>

                <br>
                <div class="form-group">
                    <label>Contenuto</label>
                    <textarea name="contenuto" class="form-control" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Immagine</label>
                    <input type="file" name="immagine" class="form-control" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Pubblica</button>
            </form>
        </div>
    </div>
</div>
</body>

@endsection
