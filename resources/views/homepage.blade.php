@extends('layouts.app')
@section('title', 'Home')

@section('content')
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
        <h1>Benvenuto in iLovePizza</h1>
        <div class="container-lg">
        <h2>Pizze Napoletane</h2>
        <h6>La pizza napoletana con pasta morbida e sottile, ma dai bordi alti, è la versione della pizza tonda preparata nella città di Napoli. Dal 5 febbraio 2010 è ufficialmente riconosciuta come Specialità Tradizionale Garantita(STG) dell'Unione Europea e nel 2017 l'arte del pizzaiuolo napoletano, di cui la pizza napoletana è il prodotto tangibile, è stata dichiarata dall'UNESCO come patrimonio immateriale dell'umanità.</h6>
        @foreach($napoletana as $pizzanapoletana)

                <div class="card" style="width: 25rem;display:inline-flex">
                    <img src="{{$pizzanapoletana['immagine']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$pizzanapoletana['nome']}}</h5>
                        <p class="card-text">Lorem Ipssum dolor</p>
                        <a href="{{route('ricetta',['id'=> $pizzanapoletana['id'] ])}}" class="btn btn-primary">Guarda</a>
                    </div>
                </div>

        @endforeach
        </div>
    <hr>



        <div class="container-md">
        <h2>Pizze Romane</h2>
        @foreach($romana as $pizzaromana)
                <div class="card" style="width: 25rem;float:center;display:inline-flex">
                    <img src="{{$pizzaromana['immagine']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$pizzaromana['nome']}}</h5>
                        <p class="card-text">Lorem Ipssum dolor</p>
                        <a href="{{route('ricetta',['id'=> $pizzaromana['id'] ])}}" class="btn btn-primary">Guarda</a>
                    </div>
                </div>
        @endforeach
        </div><br>


        <div class="container-fluid">
        <div class="container-md">
            <h2>Pizze resto'dItalia</h2>
        @foreach($resto as $pizzaresto)
                <div class="card" style="width: 25rem;float:center;display:inline-flex">
                    <img src="{{$pizzaresto['immagine']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$pizzaresto['nome']}}</h5>
                        <p class="card-text">Lorem Ipssum dolor</p>
                        <a href="{{route('ricetta',['id'=> $pizzaresto['id'] ])}}" class="btn btn-primary">Guarda</a>
                    </div>
                </div>
        @endforeach
        </div><br>
        </div>

        <div class="container-fluid">
        <div class="container-md">
            <h2>Pizze Internazionali</h2>
        @foreach($internazionale as $pizzaInternazionale)
                <div class="card" style="width: 25rem;float:center;display:inline-flex">
                    <img src="{{$pizzaInternazionale['immagine']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$pizzaInternazionale['nome']}}</h5>
                        <p class="card-text">Lorem Ipssum dolor</p>
                        <a href="{{route('ricetta',['id'=> $pizzaInternazionale['id'] ])}}" class="btn btn-primary">Guarda</a>
                    </div>
                </div>
        @endforeach
        </div>
        </div>
</div>
@endsection


