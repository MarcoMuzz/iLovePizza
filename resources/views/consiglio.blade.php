@extends('layouts.app')
@section('title', 'Consiglio')

@section('content')
    <!--
    Autore: Venuto
    -->
    <style>
        .card {
            margin: 0 auto;
            font-size: 115%;
            width:75%;
        }
        .card-text
        {
            margin: 0 auto;
            width:75%;
        }

        .vl {
            border: 1px solid black;
            padding: 0;
            margin-left: 3%;
            margin-right: 3%;
            }
        h1 {
            margin: 2%;
            font-size: 400%;
        }

        .diiv {
            display: inline;
        }


        @media screen and (max-width: 950px) {
            span {
                display: none;
            }
            .diiv {
                text-align: left;
                width:100%;
                display: inline-block;
            }

            #fab {
                width:70%;
                float:left;
            }

            #div2
            {
                display: inline-block;

            }
        }


    </style>

<div class="container">
   <h1 class="text-center " >{{$consiglios['nome']}}</h1>

   <div id="fab" class="card text-center p-2 ">


   {{--  <p>Autore : {{$autore['username']}}<span class="vl"></span>Associazione : {{$associazione['nome']}}<span class="vl"></span>Totale like: {{$conto}}
     </p>
       --}}

       <div id="diiv">
           <div class="diiv">
            Autore : {{$autore['username']}}<span class="vl"></span>
           </div>

           <div class="diiv">
            Associazione : {{$associazione['nome']}}<span class="vl"></span>
           </div>

           <div class="diiv">
           Totale like: {{$conto}}
            </div>

           <div class="diiv">
           @if(Auth::check())
               @if(Auth::user()->Utente_Consiglio->where('consiglio_id',$consiglios['id'])->first()!=null)
                   <form method="get" action="{{route('rimuoviVotoConsiglio')}}">
                       <input type="hidden" name="c_id" value={{$consiglios['id']}}>
                       <button type="submit" dusk="bottoneCuore" class="btn btn-danger">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  class="bi bi-heart" viewBox="0 0 16 16">
                               <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                           </svg>
                       </button>
                   </form>
               @else
                   <form method="get" action="{{route('votaConsiglio')}}">
                       <input type="hidden" name="c_id" value={{$consiglios['id']}}>
                       <button type="submit" dusk="bottoneCuore" class="btn btn-outline-danger">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                               <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                           </svg>
                       </button>
                   </form>
               @endif
           @endif


           </div>

       </div>

   </div >

   <div id="div2" class="card-text"><p><h2>Contenuto :</h2> {{$consiglios['contenuto']}}</p></div>

    <div class="card-text text-center">
        <a> <img style="width: 75%; border-radius: 25px" src="{{url('/cons/'.$consiglios['immagine'])}}"></a>
    </div>
</div>
@endsection

