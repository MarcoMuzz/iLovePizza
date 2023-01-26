@extends('layouts.app')
@section('title', 'Test')
@section('content')

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

            <form method="GET" action="{{route('inviaInvito')}}" >
                @csrf
                <input  type="email"  name="email" required>
                <input type ="hidden" name="associazione_id" value="{{Auth::user()->Associazione->id}}">
                <button  type="submit" class="btn btn-primary"> Invia invito</button>
            </form>




@endsection

