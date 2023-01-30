@extends('layouts.app')
@section('title', 'Test')
@section('content')

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if(session('statusRed'))
        <div class="alert alert-danger">
            {{ session('statusRed') }}
        </div>
    @endif
    <h5>Inserisci l'email della persona che vuoi invitare: </h5>
    <br>
            <form method="GET" action="{{route('inviaInvito')}}" >
                @csrf
                <input  type="email"  name="email" required>
                <input type ="hidden" name="associazione_id" value="{{Auth::user()->Associazione->id}}">
                <button  type="submit" class="btn btn-primary">Invia invito</button>
            </form>




@endsection

