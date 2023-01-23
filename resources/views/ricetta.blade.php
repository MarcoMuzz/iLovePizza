@extends('layouts.app')
@section('title', 'Ricetta')

@section('content')
    <h1>{{$ricettas['nome']}}<br></h1>
    <img src="{{$ricettas['immagine']}}"><br>
    <div>Ingredienti : {{$ricettas['ingredienti']}}</div>
    <div>Preparazione : {{$ricettas['preparazione']}}</div>
    <h2> Valutazione Media: {{$media}}</h2><br>

@if(Auth::check())
    @if(Auth::user()->Utente_Ricetta!= null && $votoPersonale!=0)
    Il tuo voto: {{$votoPersonale}}
    @else
        <div>Dai un voto
            <form method="get" action="{{route('votaRicetta')}}">
                <input type="range" name="voto" min="1" max="5" value="4">
                <input type="hidden" name="r_id" value={{$ricettas['id']}}>
                <button type="submit"  class="btn btn-primary">Vota</button>
            </form>
        </div>
    @endif
@endif


    <h2>Numero voti: {{$conto}}</h2>

    <div>
        <h1>Commenti:</h1>
        @foreach($commentos as $commento)
            <h5>{{$commento['username']}}</h5>
            {{$commento['contenuto']}}
            <div style="position: absolute; left: 300px">{{$commento['created_at']}}</div>
            <hr>

        @endforeach

        <form method="GET" action="{{route('creacommento')}}">
            <input type="hidden" name="ricetta_id" class="form-control" required value="{{$ricettas['id']}}">
            <div class="form-group">
                <input type="text" name="contenuto" class="form-control" value="{{Request::get('contenuto')}}" required placeholder="Scrivi il tuo commento... ">
            </div>
            <button type="submit" class="btn btn-primary">Pubblica</button>
        </form>
    </div>


     {{-- --}}

    <div style="position: absolute;left:1000px ">
        <h1>Autore</h1>
        Username: {{$autore['username']}} <br>
        Associazione: {{$associazione['nome']}}
    </div>

@endsection

