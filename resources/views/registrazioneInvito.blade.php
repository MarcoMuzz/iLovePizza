@extends('layouts.app')

@section('content')
    <!--
    Autore: Baso
    -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="GET" action="{{ route('storeInvitato') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="nome" value="{{ old('name') }}" required autocomplete="given-name" autofocus>

                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Cognome') }}</label>
                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control" name="cognome" value="{{ old('lastname') }}" required autocomplete="family-name" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Nome utente') }}</label>
                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" @error('username') is-invalid @enderror name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input  class="form-control" value="{{ $invito['utente_mail']}}" placeholder="{{$invito['utente_mail']}}"disabled>
                                    <input id="email" type="hidden" class="form-control"  name="email" value="{{ $invito['utente_mail']}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="associazione" class="col-md-4 col-form-label text-md-end">Associazione</label>

                                <div class="col-md-6">
                                    <input class="form-control"  value="{{$invito->Associazione->nome}}" disabled>
                                    <input type="hidden" name="associazione_id" value="{{$invito['associazione_id']}}">

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Registrami</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
