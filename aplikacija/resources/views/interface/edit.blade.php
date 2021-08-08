@extends('layouts.master')

@section('content')
    <div class="create-main">
    <a class="mygtukas sukurti" href="{{ route('skrydis.index')  }}">
        Atgal
    </a>
    <form  class="edit-row" action="{{ route('skrydis.update', $skrydis) }}"method="POST">
        @method('PATCH')
        @csrf

        <span class="edit-span"><label for="vardas">Vardas</label>
            <input type="text" name="vardas" value="{{$skrydis->vardas}} "></span>
        <span class="edit-span"><label for="pastas">El. paštas</label>
        <input type="text" name="pastas" value="{{$skrydis->pastas}}"></span>
        <span class="edit-span"><label for="telefonas">Telefono nr.</label>
        <input type="text" name="telefonas" value="{{$skrydis->telefonas}}"></span>
        <span class="edit-span"><label for="vieta">Skrydžio vieta</label>
        <input type="text" name="vieta" value="{{$skrydis->vieta}}"></span>
        <span class="edit-span"><label for="laikas">Skrydžio laikas</label>
        <input type="datetime-local" name="laikas" value="{{$skrydis->laikas}}"></span>
        <span class="edit-span"><label for="busena">Skrydžio būsena: naujas | uzregistruotas | ivykdytas</label>
        <select type="text" name="busena">
            <option value="{{$skrydis->busena}}">{{$skrydis->busena}}</option>
            <option value="naujas">Naujas</option>
            <option value="uzregistruotas">Užregistruotas</option>
            <option value="ivykdytas">Įvykdytas</option>
        </select>
        </span>

        <input class="mygtukas" type="submit" value="Atnaujinti">

    </form>
    </div>
@endsection
