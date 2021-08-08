@extends('layouts.master')

@section('content')
    <a class="mygtukas sukurti"  href="{{ route('flylocationdate.index')}}">
        Atgal
    </a>
    <form class="edit-row" action="{{ route('flylocationdate.index') }}" method="POST">
        @csrf
        <span class="edit-span"><label for="vieta">Skryzdžio vieta</label>
        <select type="text" name="vieta" required>
            <option value="">-Miestas-</option>
            <option value="Vilnius">Vilnius</option>
            <option value="Kaunas">Kaunas</option>
            <option value="Klaipėda">Klaipėda</option>
            <option value="Panevėžys">Panevėžys</option>
            <option value="Šiauliai">Šiauliai</option>
            <option value="Alytus">Alytus</option>
            <option value="Marijampolė">Marijampolė</option>
            <option value="Telšiai">Telšiai</option>
        </select>
        </span>
        <span class="edit-span"><label for="laikas">Skrydžio laikas</label>
        <input type="datetime-local" name="laikas" value=""></span>
        <span class="edit-span"><label for="busena">Skrydžio būsen: laisvas | uzrezervuotas </label>
        <input type="text" name="busena" value="laisvas" required></span>

        <button  class="mygtukas" type="submit" value="Įrašyti">Įrašyti</button>
    </form>


@endsection
