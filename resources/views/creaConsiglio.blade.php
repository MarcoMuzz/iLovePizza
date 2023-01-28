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
            <form method="GET" action="{{route('storeconsiglio')}}">
                @csrf
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" id="title" name="nome" class="form-control" required>
                </div>


                <div class="form-group">
                    <label>Contenuto</label>
                    <textarea name="contenuto" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label>Immagine (inserire il link dell'immagine, può essere hostata su imgbox.com) </label>
                    <input  type="text" name="immagine" class="form-control" required>
                </div>



                <button type="submit" class="btn btn-primary">Pubblica</button>
            </form>
        </div>
    </div>
</div>
</body>

@endsection
