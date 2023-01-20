@extends('layouts.app')
@section('title', 'Test')
@section('content')

{{$test}}


        @foreach($test as $membro)

                {{$membro['username']}} {{$membro['ruolo']}}
                @if($membro['ruolo']<$userRole)
                <form action="{{route('eliminaMembro')}}" method="post">
                    @csrf
                <input  type="hidden" name="m_id" value="{{$membro['id']}}$">
                <input  type="submit" value="Promuovi.">
                </form>
                @endif
                @if($membro['ruolo']<=$userRole)
                    <form action="{{route('eliminaMembro')}}" method="post">
                        @csrf
                        <input  type="hidden" name="m_id" value="{{$membro['id']}}$">
                        <input  type="submit" value="Espelli.">
                    </form>
                @endif
                <hr>

        @endforeach


@endsection

