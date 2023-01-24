@extends('layouts.app')
@section('title', 'Consiglio')

@section('content')
   <h1>{{$consiglios['nome']}}<br></h1>
   <img src="{{$consiglios['immagine']}}"><br>
   <div>Contenuto : {{$consiglios['contenuto']}}</div>
   <div>Autore : {{$autore['username']}}</div>
   <div>Associazione : {{$associazione['nome']}}</div>
    <h2> Totale like: {{$conto}}</h2>
    @if(Auth::user()->Utente_Consiglio->where('consiglio_id',$consiglios['id'])->first()!=null)
        <form method="get" action="{{route('rimuoviVotoConsiglio')}}">
            <input type="hidden" name="c_id" value={{$consiglios['id']}}>
            <button type="submit" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                </svg>
            </button>
        </form>
       @else
           <form method="get" action="{{route('votaConsiglio')}}">
               <input type="hidden" name="c_id" value={{$consiglios['id']}}>
               <button type="submit" class="btn btn-outline-danger">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                       <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                   </svg>
               </button>
           </form>
       @endif




@endsection

