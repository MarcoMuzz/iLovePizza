@extends('layouts.app')
@section('title', 'Ricetta')

@section('content')

    <style>
        .card
        {
            padding: 3%;
        }
        h5{
            flex-direction: row;
        }
        #imgg {
            margin: auto;
            border-radius: 20px;
            width: 100%;
        }
        li {
            display: block;
        }
        #ing
        {
            margin: auto;
            font-size: 120%;
            width:30%;
        }
        #tis
        {
            font-size: 120%;
            width:50%;
            margin: auto;
        }
        #val
        {
            margin: auto;
            padding-bottom: 0;
            width: 30rem;
        }
        #com
        {
            padding: 1%;
            margin: auto;
            background-color: #f3f3f3;
            width: 35rem;

        }
        #commo {
            margin: auto;
        }
        #aut {
            width: 30rem;
            font-size: 120%;
            margin: auto;
        }


    </style>
    <br>
    <div class="card-text text-center">
        <h1>{{$ricettas['nome']}}</h1>
    </div>
    <br>

        <div class="row">
            <div class="col">
                <div id="ing" class="card"> <h3> Ingredienti : </h3>
                    <div> {{$ricettas['ingredienti']}}</div>
                </div>
            </div>
            <div class="col">
                <div  class="card-img">
                    <img id="imgg" src="{{$ricettas['immagine']}}">
                </div>
            </div>
            <div class="col">

                <div id="val" class="card" > <!-- Inizio Sezione valutazioni -->
                    <h3> Valutazione Media: {{$media}}</h3>
                    @if(Auth::check())
                        @if(Auth::user()->Utente_Ricetta!= null && $votoPersonale!=0)
                            <h2>Il tuo voto: {{$votoPersonale}}</h2>
                        @else
                            <div> <p> Dai un voto </p>
                                <form method="get" action="{{route('votaRicetta')}}">
                                    <input type="range" name="voto" min="1" max="5" value="4">
                                    <input type="hidden" name="r_id" value={{$ricettas['id']}}>
                                    <button type="submit"  class="btn btn-primary">Vota</button>
                                </form>
                            </div>
                        @endif
                    @endif
                    <p> <h3>Numero voti: {{$conto}}</p>
                </div> <!-- Fine Sezione valutazioni -->

                <br>
                <div id="aut" class="card"> <!-- Inizio Sezione autore -->
                    <h3>Autore</h3>
                    <div> Username: {{$autore['username']}}</div>
                    Associazione: {{$associazione['nome']}}
                </div> <!-- Fine Sezione autore -->
            </div>
        </div>


    <br>
    <div id="tis" class="card-text"> <h3> Preparazione : </h3>
        <div>  {{$ricettas['preparazione']}}</div>
    </div>
    <!-- Fine Sezione ricetta -->


    <br>
    <div id="com" class="card"> <!-- Inizio Sezione commenti -->
        <h3>Commenti:</h3> <br>

        @foreach($commentos as $commento)
            <div id="commo" class="card" style="width: 30rem;">
                <div>
                    <h5>{{$commento['username']}} </h5>
                </div>

                <div class="card-text">
                    {{$commento['contenuto']}} <span style="float: right">{{$commento['created_at']}}</span>
                </div>
            </div>
            <br>

        @endforeach

        <form method="GET" action="{{route('creacommento')}}">
            <input type="hidden" name="ricetta_id" class="form-control" required value="{{$ricettas['id']}}">
            <div class="form-group">
                <input type="text" name="contenuto" class="form-control" value="{{Request::get('contenuto')}}" required placeholder="Scrivi il tuo commento... ">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Pubblica</button>
        </form>
    </div> <!-- Fine Sezione commenti -->

    <br>


    </li>
@endsection

