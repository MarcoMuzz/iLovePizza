@extends('layouts.app')
@section('title', 'profilo')

@section('content')
    <!--
    Autore: Stingi
    -->
    <div class="container">
        <h1>Profilo Personale</h1>
        <table class="table">
            <tbody>
                <tr>
                    <td>Username</td>
                    <td> {{$utente['username']}}</td>
                </tr>
                <tr>
                    <td>Nome</td>
                    <td> {{$utente['nome']}}</td>
                </tr>
                <tr>
                    <td>Cognome</td>
                    <td> {{$utente['cognome']}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> {{$utente['email']}}</td>
                </tr>
                @if($associazione != null)
                    <tr>
                        <td>Associazione</td>
                        <td>{{$associazione['nome']}}</td>
                    </tr>
                    <tr>
                        <td>Ruolo</td>
                        <td>@if(Auth::user()->custom ==1)
                                Membro
                            @endif

                            @if(Auth::user()->custom ==2)
                                Moderatore
                            @endif

                            @if(Auth::user()->custom ==3)
                                Capo
                            @endif
                        </td>
                    </tr>

                @endif


            </tbody>
        </table>
        <div class="row">

            <div class="col-sm-6 col-md-4">
                <h1>Ricette:</h1>
                @if($ricette=='[]')
                    <p>Non hai ancora scritto nessuna ricetta</p>
                @endif
                <div class="scroll">

                    @foreach($ricette as $ricetta)
                        <div class="card">
                            <img src="{{url('/ricette/'.$ricetta['immagine'])}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$ricetta['nome']}}</h5>
                                <p style="color: grey;"> {{$ricetta['preparazione']}}</p>
                                <a href="{{route('ricetta',['id'=> $ricetta['id'] ])}}" class="btn btn-primary">Guarda</a>
                            </div>
                        </div>
                        <br><br>
                    @endforeach
                </div>
            </div>

            <div class="col-sm-6 col-md-4"> </div>
            <div class="col-sm-6 col-md-4">
                <h1>Consigli:</h1>
                @if($consigli=='[]')
                    <p>Non hai ancora scritto nessun consiglio</p>
                @endif
                <div class="scroll">
                    @foreach($consigli as $consiglio)
                        <div class="card">
                            <img src="{{url('/cons/'.$consiglio['immagine'])}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$consiglio['nome']}}</h5>
                                <p style="color: grey;"> {{$consiglio['contenuto']}}</p>
                                <a href="{{route('consiglio',['id'=> $consiglio['id'] ])}}" class="btn btn-primary">Guarda</a>
                            </div>
                        </div>
                        <br><br>
                    @endforeach
                </div>
            </div>




        </div>



    </div>


    {{--
    Username: {{$utente['username']}} <br>
    Nome: {{$utente['nome']}} <br>
    Cognome: {{$utente['cognome']}} <br>
    Email: {{$utente['email']}} <br>
    @if($associazione != null)
    Associazione: {{$associazione['nome']}} <br>
    Ruolo:
        @if(Auth::user()->custom ==1)
            Membro
        @endif

        @if(Auth::user()->custom ==2)
            Moderatore
        @endif

        @if(Auth::user()->custom ==3)
            Capo
        @endif
    @endif
<hr>
    @if($ricette!=null)
    <div style="float: left; position:absolute " >
        <h2>Le mie ricette:</h2>
    @foreach($ricette as $ricetta)
        <h2>{{ $ricetta['nome']}}</h2>
        <p><img style="max-width: 150px" src="{{ $ricetta['immagine']}}"><br/></p>
        @if($ricetta['napoletana'] == 1) Pizza Napoletana
        @endif
        @if($ricetta['romana'] == 1) Pizza Romana
        @endif
        @if($ricetta['resto'] == 1) Pizza proveniente dal resto d'Italia
        @endif
        @if($ricetta['internazionale'] == 1) Pizza Internazionale
        @endif
        <a href="{{route('ricetta',['id'=>$ricetta['id']])}}">Continua a leggere</a>
        <br/>____________________________________________________<br>
    @endforeach
    </div>
    @endif

    @if($consigli!=null)
    <div style="float: right; position: center ">
        <h2>I miei consigli:</h2>
    @foreach($consigli as $consiglio)

        <h2>{{ $consiglio['nome']}}</h2>
        <p><img style="max-width: 150px" src="{{ $consiglio['immagine']}}"><br/></p>
        <a href="{{route('consiglio',['id'=>$consiglio['id']])}}">Continua a leggere</a>
        <br/>____________________________________________________<br>
    @endforeach
    @endif
    </div>
    --}}
@endsection

