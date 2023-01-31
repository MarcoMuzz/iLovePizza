@extends('layouts.app')
@section('title', 'Modifica Ricetta')

@section('content')



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
            Modifica la ricetta
        </div>
        <div class="card-body">
            <form method="GET" action="{{route('updateRicetta')}}">
                @csrf
                <div class="form-group">
                    <label>Nome</label>
                    <textarea name="nome" class="form-control" required>{{$ricetta['nome']}}</textarea>
                </div>

                <div class="form-group">
                    <label>Ingredienti</label>
                    <textarea name="ingredienti" class="form-control" required>{{$ricetta['ingredienti']}}</textarea>
                </div>


                <div class="form-group">
                    <label>Preparazione</label>
                    <textarea name="preparazione" class="form-control" required>{{$ricetta['preparazione']}}</textarea>
                </div>

                <div class="form-group">
                    <label>Tipologia</label>
                    <select  class="form-control" name="tipologia" required>
                        <option value="" selected disabled> Seleziona la tua tipologia </option>
                        @if ($associazione ['napoletana'] == 1)
                            <option value="napoletana"> Napoletana</option>
                        @endif

                            @if ($associazione ['romana'] == 1)
                                <option value="romana"> Romana</option>
                            @endif

                            @if ($associazione ['internazionale'] == 1)
                                <option value="internazionale"> Internazionale</option>
                            @endif

                            @if ($associazione ['resto'] == 1)
                                <option value="resto"> Resto d'Italia</option>
                            @endif

                    </select>
                </div>

                <div class="form-group">
                    <label>Cottura</label>
                    <select  class="form-control" name="cottura" required>
                        <option value="" selected disabled> Seleziona il tipo di cottura </option>
                            <option value="fornogas"> Forno a gas</option>
                            <option value="fornoalegna"> Forno a legna</option>
                            <option value="fornoelettrico"> Forno a elettrico</option>
                            <option value="padella"> Padella</option>
                    </select>
                </div>


                <input  type="hidden" name="id" value="{{$ricetta['id']}}">
                <button type="submit" class="btn btn-primary">Applica modifica</button>
            </form>
        </div>
    </div>
</div>
</body>

@endsection
