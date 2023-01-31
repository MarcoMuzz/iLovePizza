@extends('layouts.app')
@section('title', 'Consiglio')
@section('content')


  <style>
      .card {
          flex-direction: row;
          margin-bottom: 2%;
      }
      .card-title {
          font-weight: bold;
      }
      .card img {
          object-fit: cover;
        width:30%;
      }

      h5{
          font-size:125%;
      }

      p{
          font-size:113%;
          margin-top: 2%;
      }
      #p1 {
          color: grey;
      }

      @media screen and (max-width: 768px) {
          a {
              display: none;
          }
          .card-body {
              padding: 0.5em 1.2em;
          }
          .card-body .card-text {
              margin: 0;
          }
          .card{
              width: 75%;
              flex-direction: column;
          }
          .card img {
              width:100%;
          }
         #p1{
          width: 250px;
          white-space: nowrap;
          overflow: hidden;
          text-overflow: ellipsis;
          }
      }
      .pagi nav{
          background-color:#f8fafc;
          box-shadow: none;
      }

  </style>

  <div class="container">
      <div class="pagi">{!!$consiglios->links()!!} </div>
      @foreach($consiglios as $consiglio)


          <div class="card">
              <img src="{{ $consiglio['immagine']}}" class="card-img-top"/>
              <div class="card-body">
                  <h2 class="card-title">{{ $consiglio['nome']}}</h2>
                  <h5 class="card-text">
                      @foreach($autores as $autore)
                          @if($autore['id'] == $consiglio['utente_id'])
                            <strong>  Scritta da: {{$autore['username']}}</strong>

                          @endif

                      @endforeach</h5>
                          <p id="p1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                              exercitation ullamco laboris nisi ut aliquip ex ea commodo.... <br> </p>


                  <a href="{{route('consiglio',['id'=>$consiglio['id']])}}" class="btn btn-primary">Continua a leggere</a>
              </div>
          </div>


      @endforeach
  </div>






@endsection
