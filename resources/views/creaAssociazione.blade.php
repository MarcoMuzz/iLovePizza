@extends('layouts.app')
@section('title', 'Crea Associazione')

@section('content')
    <!--
    Autore: Stingi
    -->
    <html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Crea un'Associazione
            </div>
            <div class="card-body">
                <form method="GET" action="{{route('storeassociazione')}}">
                    @csrf
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" id="title" name="nome" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Descrizione</label>
                        <input type="text" id="descrizione" name="descrizione" class="form-control" required>
                    </div>
                    <div class="tipologie">
                        <label>Seleziona la/e tipologia/e di Pizze di cui si occupa la tua Associazione:</label><br>
                    <input type="checkbox" name="napoletana">Napoletana<br>
                    <input type="checkbox" name="romana">Romana<br>
                    <input type="checkbox" name="resto">Pizze dal resto dell'Italia<br>
                    <input type="checkbox" name="internazionale">Internazionale<br>
                    </div>

                    <button type="submit" class="btn btn-primary">Continua</button>
                </form>
            </div>
        </div>
    </div>

    </body>

@endsection
