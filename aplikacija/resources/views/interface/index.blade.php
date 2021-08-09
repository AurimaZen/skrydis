@extends('layouts.master')

@section('content')
    @if(Auth::check())
        <li><i class="fa fa-user"></i> {{Auth::user()->name}}</li>
        <form id="logout-form" action="{{ url('logout') }}" method="POST">
            {{ csrf_field() }}
            <button class="atsijungti" type="submit">Atsijungti</button>
        </form>
    @else
        <li><a href="{{route('login')}}"><i class="fa fa-user"></i>
                Prisijungti
            </a>
        </li>
    @endif
    <h1>Skrydžių valdymas</h1>
    <a class="mygtukas sukurti" href="{{route('skrydis.create')}}">Sukurti skrydį</a><br>
    <form class="filters-row" action="{{ route('skrydis.index') }}" method="GET">
        @csrf
        <input class="mygtukas" type="date" name="data">
        <select class="mygtukas" type="text" name="vieta">
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
        <select class="mygtukas" type="text" name="busena">
            <option value="">-Statusas-</option>
            <option value="naujas">Naujas</option>
            <option value="uzregistruotas">Užregistruotas</option>
            <option value="ivykdytas">Įvykdytas</option>
        </select>
        <input class="mygtukas" type="submit" value="Filtruoti">
    </form>
    @foreach ($list as $skrydis)

        <div class="admin-panel">
            <div class="line">
                <a href="{{ route('skrydis.show', $skrydis)  }}">
                    <span class="spankodas">{{ $skrydis->kodas }}</span><span
                        class="vardas">{{ $skrydis->vardas }}</span><span> {{$skrydis->pastas}}</span>
                    <span>{{$skrydis->telefonas}}</span>
                    <span>{{$skrydis->vieta}}</span><span> {{$skrydis->laikas}}</span> <span>{{$skrydis->busena}}</span>
                </a>
                <a class="mygtukas redaguoti" href="{{ route('skrydis.edit', $skrydis->id)  }}">Redaguoti skrydį</a>
                <form action="{{ route('skrydis.destroy',  $skrydis->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input class="mygtukas istrinti" type="submit" value="Ištrinti skrydį">
                </form>
            </div>
        </div>

    @endforeach
@endsection
