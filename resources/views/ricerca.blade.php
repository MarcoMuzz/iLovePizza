@extends('layouts.app')
@section('title', 'Ricerca')
@section('content')

<div class="container-lg">
    <h2>Risultati per "{{$ricerca}}"...</h2><br><br><br>
    <div class="row">

        <div class="col-sm-6 col-md-4 text-center">
        <h2>Ricette</h2>
            @foreach($ricettas as $ricetta)
            <div class="card" style="width: 25rem;display:inline-flex">
                <img src="{{url('/ricette/'.$ricetta['immagine'])}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$ricetta['nome']}}</h5>
                    <p class="card-text">Lorem Ipssum dolor</p>
                    <a href="{{route('ricetta',['id'=> $ricetta['id'] ])}}" class="btn btn-primary">Guarda</a>
                </div>
            </div>
                <hr>
            @endforeach




        </div>

        <div class="col-sm-6 col-md-4 text-center">

            <h2>Consigli</h2>
            @foreach($consiglios as $consiglio)
                <div class="card" style="width: 25rem;display:inline-flex">
                    <img src="{{url('/cons/'.$consiglio['immagine'])}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$consiglio['nome']}}</h5>
                        <p class="card-text">Lorem Ipssum dolor</p>
                        <a href="{{route('consiglio',['id'=> $consiglio['id'] ])}}" class="btn btn-primary">Guarda</a>
                    </div>
                </div>
                <hr>
            @endforeach



        </div>
        <!--</div>-->

        <div class="col-sm-6 col-md-4 text-center">

            <h2>Associazioni</h2>
            @foreach($associaziones as $associazione)
            <div class="card  text-center" style="flex:40%;margin: 3px">
                <div class="card-body">
                    <h3 class="card-title">{{ $associazione['nome']}}</h3>
                    <a href="{{route('associazione',['id'=>$associazione['id']])}}" class="btn btn-primary">Visita</a>
                </div>
            </div>
            @endforeach
        </div>
        <!--</div>-->

    </div>
</div>
@endsection
