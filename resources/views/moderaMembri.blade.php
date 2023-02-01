@extends('layouts.app')
@section('title', 'Modera Membri')
@section('content')
    <!--
    Autore: Baso
    -->
<style>

    .btn-primary{
        margin:1px;
    }
</style>

    <div class="container">
        <h1>Modera Membri</h1>
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

        @if($membri=='[]')
            <p>Non ci sono membri</p>
        @else
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Ruolo</th>
                <th scope="col">Azione</th>
            </tr>
            </thead>
            @foreach($membri as $membro)
                <tr>
                    <td>{{$membro['username']}}</td>
                    <td>
                        @switch($membro['ruolo'])
                            @case(1)
                                Membro
                                @break

                            @case(2)
                                Moderatore
                                @break

                            @case(3)
                                Capo
                                @break

                        @endswitch
                    </td>
                    <td>
                        <div style="display:inline-flex">
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
                        </div>
                    </td>

                </tr>

            @endforeach
            @endif
        </table>






    </div>


@endsection

