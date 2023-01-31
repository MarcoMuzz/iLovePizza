@extends('layouts.app')
@section('title', 'Ricetta')

@section('content')

    <style>

        .card
        {
            padding: 3%;
        }

        #imgg {
            margin: auto;
            border-radius: 20px;
            width: 100%;
        }



    </style>
    <br>
    <div class="container">
    <div class="card-text text-center">
        <h1>{{$ricettas['nome']}}</h1>
    </div>
    <br>
        <br>
        <div class="row">
            <div class="col-12 col-md-8">
                <div  class="card-img">
                    <img id="imgg" src="{{url('/ricette/'.$ricettas['immagine'])}}">
                </div>


            </div>
            <div class="col">
                <div>
                    <br>
                    <div class="card"> <!-- Inizio Sezione autore -->
                        <h3>Autore</h3>
                        <div> Username: {{$autore['username']}}</div>
                        Associazione: {{$associazione['nome']}}

                    </div>
                    <hr>
                   <div class="card"><h3> Valutazione Media: {{$media}}</h3>
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
                </div>



                <br>

            </div>
        </div>

<br>
        <div class="card">
           <h3> Ingredienti : </h3>
            {{$ricettas['ingredienti']}}
        </div>

    <br>
    <div class="card"> <h3> Preparazione : </h3>
        <div>  {{$ricettas['preparazione']}}</div>
    </div>
    <!-- Fine Sezione ricetta -->


    <br>
    <div class="card"> <!-- Inizio Sezione commenti -->
        <h3>Commenti:</h3> <br>

        @foreach($commentos as $commento)
            <div class="card"">
                <div>
                    <h5>{{$commento['username']}} </h5>
                </div>

                <div class="card-text">
                    {{$commento['contenuto']}} <span style="float: right">{{$commento['created_at']}}</span>
                </div>
            </div>
            <br>
        <br>

        @endforeach
        @if(Auth::check())
        <form method="GET" action="{{route('creacommento')}}">
            <input type="hidden" name="ricetta_id" class="form-control" required value="{{$ricettas['id']}}">
            <div class="form-group">
                <input type="text" name="contenuto" class="form-control" value="{{Request::get('contenuto')}}" required placeholder="Scrivi il tuo commento... ">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Pubblica</button>
        </form>
            @endif


    <br>
@endsection

