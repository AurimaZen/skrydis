@extends('layouts.master')

@section('content')
    <div class="customer">
        <h1>Registracija skrydziui</h1>
        <h4>Džiaugiamės, kad pasirinkote skrydį su Vilniaus parasparnių klubu! Įveskite savo skrydžio kodą
            apačioje.</h4>
        <form class="customer-form" action="{{ route('registration.form') }}" method="GET">
            @csrf
            <input class="" type="text" name="kodas">
            <input class="mygtukas" type="submit" value="Registruotis skrydžiui">

        </form>
    </div>

@endsection
