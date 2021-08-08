@extends('layouts.master')

@section('content')
    <a class="mygtukas sukurti"  href="{{ route('skrydis.index')  }}">
        Atgal
    </a>
    <form class="edit-row" action="{{ route('skrydis.index') }}" method="POST">
        @csrf
        <span class="edit-span"><label for="vardas">Vardas</label>
        <input type="text" name="vardas" value=""></span>
        <span class="edit-span"><label for="pastas">El. paštas</label>
        <input type="text" name="pastas" value=""></span>
        <span class="edit-span"><label for="telefonas">Telefono nr.</label>
        <input type="text" name="telefonas" value=""></span>
        <span class="edit-span"><label for="vieta">Skryzdžio vieta</label>
        <input type="text" name="vieta" value=""></span>
        <span class="edit-span"><label for="laikas">Skrydžio laikas</label>
        <input type="text" name="laikas" value=""></span>
        <span class="edit-span"><label for="busena">Skrydžio būsena: naujas | uzregistruotas | ivykdytas</label>
        <input type="text" name="busena" value=""></span>

        <input  class="mygtukas" type="submit" value="Įrašyti">
    </form>


@endsection
