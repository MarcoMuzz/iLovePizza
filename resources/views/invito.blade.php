@extends('layouts.app')
@section('title', 'Test')
@section('content')


            <form action="{{route('inviaInvito')}}" method="post">
                @csrf
                <input  type="email" name="invitoMail" value=" ">
                <input  type="submit" value="Invia invito">
            </form>



@endsection

