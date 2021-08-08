@extends('layouts.master')

@section('content')

    <div class="main-content thankyou">
        <h1>Dėkojame, kad pasirinkote skrydį su Vilniaus parasparnių klubu</h1>

        <h4>Jūsų skrydžio kodas: <span class="kodas">{{$kodas}}</span></h4>

        <p>Skrydžio kuponas galioja iki: ...</p>
        <p>Kviečiame registruotis skrydžiui. Gero vėjo!</p>
        <form action="{{route('registration.form' )}}">
            <input type="hidden" name="kodas" value="{{$kodas}}">
        <button type="submit" class="btn btn-primary">Registruotis skrydziui <i class="fas fa-lock"></i></button>
        </form>
        <a href="#"type="button" class="btn btn-primary">Atsisiųsti skrydžio kuponą <i class="fas fa-download"></i></a>
    </div>
@endsection
