@extends('layouts.app')
@section('title', 'Consiglio')
@section('content')

  {{--  @foreach($consiglios as $consiglio)
        <div class="card" style="width: 40rem;display:list; margin: 15px auto; padding:1%">
        <h2 style="text-align:center;"> {{ $consiglio['nome']}}</h2>
        @foreach($autores as $autore)
            @if($autore['id'] == $consiglio['utente_id'])
            <p style="text-align:center;"> written by: {{$autore['nome']}} </p>
            @endif
        @endforeach
        <p><img style="max-width: 150px; float: left; padding-right: 20px" src="{{ $consiglio['immagine']}}">
            <br> Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure... </p>

        <a style="text-align:right;" href="{{route('consiglio',['id'=>$consiglio['id']])}}">Continua a leggere ></a>
        </div>
    @endforeach
  --}}

  <style>
      .card {
          flex-direction: row;
          align-items: center;
      }
      .card-title {
          font-weight: bold;
      }
      .card img {
          width: 33%;
          border-top-right-radius: 0;
          border-bottom-left-radius: calc(0.25rem - 1px);
      }

      h5{
          font-size:125%;

      }

      p{
          font-size:113%;
      }
      @media only screen and (max-width: 768px) {
          a {
              display: none;
          }
          .card-body {
              padding: 0.5em 1.2em;
          }
          .card-body .card-text {
              margin: 0;
          }
          .card img {
              width: 50%;
          }
      }
      @media only screen and (max-width: 1200px) {
          .card img {
              width: 40%;
          }
      }

  </style>

  <div class="container">
      @foreach($consiglios as $consiglio)
          <br>

          <div class="card">
              <img style="object-fit: cover;" src="{{ $consiglio['immagine']}}" class="card-img-top" />

              <div class="card-body">
                  <h2 class="card-title">{{ $consiglio['nome']}}</h2>
                  <h5 class="card-text">
                      @foreach($autores as $autore)
                          @if($autore['id'] == $consiglio['utente_id'])
                            <strong>  Scritta da: {{$autore['username']}}</strong>

                          @endif

                      @endforeach</h5>
                          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                              exercitation ullamco laboris nisi ut aliquip ex ea commodo.... <br> </p>


                  <a href="{{route('consiglio',['id'=>$consiglio['id']])}}" class="btn btn-primary">Continua a leggere</a>
              </div>
          </div>


      @endforeach
  </div>






@endsection
