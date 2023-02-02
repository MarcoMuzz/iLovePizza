@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <!--
    Autore: Venuto
    -->
    <style>
        .card-img-top{
            height:250px;
            width:auto;
        }

        .card{
            display:inline-flex;
            width:33%;
        }

        @media only screen and (max-width: 600px) {
            .card {
                width:100%;
            }
        }
    </style>



<div class="container">
    @if(session('status'))
        <div class="alert alert-success ">
            {{ session('status') }}
        </div>
    @endif

    @if(session('statusRed'))
        <div class="alert alert-danger ">
            {{ session('statusRed') }}
        </div>
    @endif

        <div class="container-lg">
            <h1>Benvenuto in iLovePizza! 👋🏻 </h1> <br>

        <h2>Pizze Napoletane</h2>
        <h6>La pizza napoletana con pasta morbida e sottile, ma dai bordi alti, è la versione della pizza tonda preparata nella città di Napoli. Dal 5 febbraio 2010 è ufficialmente riconosciuta come Specialità Tradizionale Garantita(STG) dell'Unione Europea e nel 2017 l'arte del pizzaiuolo napoletano, di cui la pizza napoletana è il prodotto tangibile, è stata dichiarata dall'UNESCO come patrimonio immateriale dell'umanità.</h6>
        @foreach($napoletana as $pizzanapoletana)

                <div class="card">
                    <img src="{{url('/ricette/'.$pizzanapoletana['immagine'])}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$pizzanapoletana['nome']}}</h5>
                        <p class="card-text">Lorem Ipssum dolor</p>
                        <a href="{{route('ricetta',['id'=> $pizzanapoletana['id'] ])}}" class="btn btn-primary">Guarda</a>
                    </div>
                </div>

        @endforeach
            <br>
<div class="text-center">
            <a href="{{route('fabio',['tipologia'=> 'napoletana' ])}}" class="btn btn-primary center" style="margin-top:4px">Clicca qui per entrare nella sezione dedicata alle Pizze Napoletane</a>
</div>

    <hr>

        <div class="container-md">
        <h2>Pizze Romane</h2>
            <h6>La Pizza alla Romana è una delle più amate specialità di Roma.
                La si riconosce fin dal primo boccone e conquista il nostro palato
                grazie alla bontà dei suoi ingredienti e la sua particolare croccantezza.
                La sua particolarità sta nel suo elevato contenuto d’acqua: non a caso per
                la sua preparazione viene utilizzata una farina con elevata capacità
                di assorbimento. Ovviamente, non è solo una questione di materie prime, ma
                anche di tecnica di lavorazione e, soprattutto, di lievitazione: la
                lievitazione dura da un minimo di 24 ore ad un massimo di 100.
            </h6>
        @foreach($romana as $pizzaromana)
                <div class="card">
                    <img src="{{url('/ricette/'.$pizzaromana['immagine'])}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$pizzaromana['nome']}}</h5>
                        <p class="card-text">Lorem Ipssum dolor</p>
                        <a href="{{route('ricetta',['id'=> $pizzaromana['id'] ])}}" class="btn btn-primary">Guarda</a>
                    </div>
                </div>
        @endforeach
            <div class="text-center">
                <a href="{{route('fabio',['tipologia'=> 'romana' ])}}" class="btn btn-primary center" style="margin-top:4px">Clicca qui per entrare nella sezione dedicata alle Pizze Romane</a>
            </div>
        </div>
        </div>
    <hr>


        <div class="container-fluid">
        <div class="container-md">
            <h2>Pizze resto d'Italia</h2>
            <h6>In questa sezione sono raggruppate tutte le altre tradizioni di pizze regionali italiane, come la siciliana e la pugliese</h6>
        @foreach($resto as $pizzaresto)
                <div class="card">
                    <img src="{{url('/ricette/'.$pizzaresto['immagine'])}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$pizzaresto['nome']}}</h5>
                        <p class="card-text">Lorem Ipssum dolor</p>
                        <a href="{{route('ricetta',['id'=> $pizzaresto['id'] ])}}" class="btn btn-primary">Guarda</a>
                    </div>
                </div>
        @endforeach
            <div class="text-center">
                <a href="{{route('fabio',['tipologia'=> 'resto' ])}}" class="btn btn-primary center" style="margin-top:4px">Clicca qui per entrare nella sezione dedicata alle Pizze dal resto dell'Italia</a>
            </div>
        </div>
        </div>
    <hr>

        <div class="container-fluid">
        <div class="container-md">
            <h2>Pizze Internazionali</h2>
            <h6>La sezione di pizze a tradizione internazionale offre una vasta gamma di opzioni
                per i amanti della pizza di tutto il mondo come la pizza Hawaiana americana, c'è una pizza per soddisfare i gusti di tutti.
                Ci sono anche pizze con influenze culinarie da paesi come Giappone, India e
                persino Australia. Questa sezione offre l'opportunità di esplorare nuovi sapori
                e tradizioni culinarie di tutto il mondo.</h6>
        @foreach($internazionale as $pizzaInternazionale)
                <div class="card">
                    <img src="{{url('/ricette/'.$pizzaInternazionale['immagine'])}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$pizzaInternazionale['nome']}}</h5>
                        <p class="card-text">Lorem Ipssum dolor</p>
                        <a href="{{route('ricetta',['id'=> $pizzaInternazionale['id'] ])}}" class="btn btn-primary">Guarda</a>
                    </div>
                </div>
        @endforeach
            <div class="text-center">
                <a href="{{route('fabio',['tipologia'=> 'internazionale' ])}}" class="btn btn-primary center" style="margin-top:4px">Clicca qui per entrare nella sezione dedicata alle Pizze Internazionali</a>
            </div>
        </div>
        </div>
        </div>

@endsection


