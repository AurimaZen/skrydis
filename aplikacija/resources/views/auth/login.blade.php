@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="/phpakademija/skrydziai/aplikacija/public/css/skrydis.jpg" alt="login"
                         class="login-card-img">
                </div>
                <div class="col-md-6">
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <h1>{{ $error }}</h1>
                        @endforeach
                    @endif
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <img src="/phpakademija/skrydziai/aplikacija/public/css/deco-2.svg" alt="logo" class="logo">
                        </div>
                        <p class="login-card-description">Prisijungimas</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="sr-only">El. paštas</label>
                                <input type="email" name="email" id="email" class="form-control"
                                       placeholder="E. paštas">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Slaptažodis</label>
                                <input type="password" name="password" id="password" class="form-control"
                                       placeholder="***********">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit"
                                   value="Prisijungti">
                        </form>
                        <a href="#!" class="forgot-password-link">Pamiršai slaptažodį?</a>
                        <p class="login-card-footer-text">Neturite paskyros? <a href="{{ route('register') }}"
                                                                                class="text-reset">Registracija</a></p>
                        <nav class="login-card-footer-nav">
                            <a href="#!">Slapukų politika.</a>
                            <a href="#!">Privatumo politikia.</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
@endsection


