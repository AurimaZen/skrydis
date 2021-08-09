@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="/phpakademija/skrydziai/aplikacija/public/css/dviese.jpg" alt="login"
                         class="login-card-img">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <img src="/phpakademija/skrydziai/aplikacija/public/css/deco-2.svg" alt="logo" class="logo">
                        </div>
                        <p class="login-card-description">Registracija</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="sr-only">Vardas</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                       placeholder="Vardas">

                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="form-group">
                                <label for="email" class="sr-only">El. paštas</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email"
                                       placeholder="El. paštas">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Slaptažodis</label>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password" placeholder="Slaptažodis">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Slaptažodis</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password"
                                       placeholder="Patvirtinti slaptažodį">
                            </div>
                            <input name="register" id="register" class="btn btn-block login-btn mb-4" type="submit"
                                   value="Registruotis">
                        </form>
                        <p class="login-card-footer-text">Turite paskyrą? <a href="{{ route('login') }}"
                                                                             class="text-reset">Prisijunkite</a></p>
                        <nav class="login-card-footer-nav">
                            <a href="#!">Slapukų politika.</a>
                            <a href="#!">Privatumo politika</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


