@extends('layouts.app')
@section('title', 'Modera Membri')
@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


        @foreach($membri as $membro)

                {{$membro['username']}}
                @switch($membro['ruolo'])
                    @case(1)
                        (Membro)
                        @break

                    @case(2)
                        (Moderatore)
                        @break

                    @case(3)
                        (Capo)
                        @break

                    @default
                        (errore)
                @endswitch

                @if($userRole==3 && $membro['ruolo']=='1')
                <form action="{{route('promuoviMembro')}}" method="post">
                    @csrf
                <input  type="hidden" name="m_id" value="{{$membro['id']}}$">
                    <button type="submit" class="btn btn-primary">Promuovi</button>
                </form>
                @endif

                @if($membro['ruolo']<$userRole && $membro['ruolo']=='2')
                    <form action="{{route('declassaMembro')}}" method="post">
                        @csrf
                        <input  type="hidden" name="m_id" value="{{$membro['id']}}$">
                        <button type="submit" class="btn btn-primary">Declassa</button>
                    </form>
                @endif

                @if($membro['ruolo']<$userRole)
                    <form action="{{route('espelliMembro')}}" method="post">
                        @csrf
                        <input  type="hidden" name="m_id" value="{{$membro['id']}}$">
                        <button type="submit" class="btn btn-primary">Espelli</button>
                    </form>
                @endif
                <hr>

        @endforeach


@endsection

