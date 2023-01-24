@extends('layouts.app')
@section('title', 'Ricetta')

@section('content')
    <div class="card" style=" width: 50rem"> <!-- Inizio Sezione ricetta -->
    <h1>{{$ricettas['nome']}}<br></h1>
    <img src="{{$ricettas['immagine']}}"><br>
    <div>Ingredienti : {{$ricettas['ingredienti']}}</div>
    <div>Preparazione : {{$ricettas['preparazione']}}</div>
    </div> <!-- Fine Sezione ricetta -->

    <br>

    <div class="card" style="width: 20rem"> <!-- Inizio Sezione valutazioni -->
        <h2> Valutazione Media: {{$media}}</h2>
        @if(Auth::check())
            @if(Auth::user()->Utente_Ricetta!= null && $votoPersonale!=0)
                <h2>Il tuo voto: {{$votoPersonale}}</h2>
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
    </div> <!-- Fine Sezione valutazioni -->

    <br>

    <div class="card " style="background-color: #f3f3f3; width: 40rem; " > <!-- Inizio Sezione commenti -->
        <h1>Commenti:</h1>

        @foreach($commentos as $commento)
            <div class="card " style="width: 30rem;">
            <h5>{{$commento['username']}}</h5>
            {{$commento['contenuto']}}
            <div style="position: absolute; left: 300px">{{$commento['created_at']}}</div>
            </div>
            <br>

        @endforeach

        <form method="GET" action="{{route('creacommento')}}">
            <input type="hidden" name="ricetta_id" class="form-control" required value="{{$ricettas['id']}}">
            <div class="form-group">
                <input type="text" name="contenuto" class="form-control" value="{{Request::get('contenuto')}}" required placeholder="Scrivi il tuo commento... ">
            </div>
            <button type="submit" class="btn btn-primary">Pubblica</button>
        </form>
    </div> <!-- Fine Sezione commenti -->

    <br>

    <div class="card" style="width: 20rem "> <!-- Inizio Sezione autore -->
        <h1>Autore</h1>
        Username: {{$autore['username']}} <br>
        Associazione: {{$associazione['nome']}}
    </div> <!-- Fine Sezione autore -->

@endsection

