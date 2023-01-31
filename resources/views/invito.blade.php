@extends('layouts.app')
@section('title', 'Test')
@section('content')

    <style>
        .card {
            margin: 0 auto;
            text-align: center;
            padding: 2%;
            width: 50%;
            justify-content: center;
            align-content: center;
        }
        .card-text {
            margin: 0 auto;
            width: 34%;
            text-align: center;
        }

        @media screen and (max-width: 768px) {
        button {
            display: block;
            margin-top: 2%;
        }
            .card-text {
                width: 50%;
            }
        }
    </style>

    <div class="card-text">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if(session('statusRed'))
            <div class="alert alert-danger">
                {{ session('statusRed') }}
            </div>
        @endif
    </div>

    <br>
    <div class="container">
        <div class="card align-content-center">

            <h5>Inserisci la mail della persona che desideri invitare: </h5>

            <form method="GET" action="{{route('inviaInvito')}}" >
                @csrf
                <input  type="email"  name="email" required>
                <input type ="hidden" name="associazione_id" value="{{Auth::user()->Associazione->id}}">
                <button  type="submit" class="btn btn-primary">Invia invito</button>
            </form>
        </div>
    </div>




@endsection

