@extends('layouts.master')

@section('content')
    <div class="customer-content">
        <div class="reg-form">
            <h4>Sveiki, Jūsų skrydžio numeris yra: {{request()->get('kodas')}}</h4>
            <p>Pasirinkite pageidaujamą skrydžio datą ir laiką</p>
            <form class="registration-form" action="{{route('registration.update', $skrydis)}}" method="POST">
                @csrf

                <span class="edit-span"><label for="vardas">Vardas</label>
        <input class="customer-input" type="text" name="vardas" value="{{$skrydis->vardas}}" required></span>
                <span class="edit-span"><label for="pastas">El. paštas</label>
        <input class="customer-input" type="text" name="pastas" value="{{$skrydis->pastas}}" required></span>
                <span class="edit-span"><label for="telefonas">Telefono nr.</label>
        <input class="customer-input" type="text" name="telefonas" value="{{$skrydis->telefonas}}" required></span>

                <select class="customer-input" name="vietos" required>
                    <option value="">Kur norėtumėte skristi?</option>
                    @foreach ($list as $item){{$item->laikas}}
                    <option value="{{$item->laikas}}|{{$item->vieta }}">{{ $item->laikas }}
                        | {{ $item->vieta }}</option>
                    @endforeach
                </select>
                <button class="mygtukas" type="submit">Registruotis skrydžiui</button>
            </form>
        </div>

        <div class="reg-form">
            <img class="big-img" src="/phpakademija/skrydziai/aplikacija/public/css/skrydis.jpg">
            <span class="features">
            <div class="features-column">
                <img src="/phpakademija/skrydziai/aplikacija/public/css/instruktorius.png">
                <p>Patyrę instruktoriai</p>
            </div>
            <div class="features-column">
                <img src="/phpakademija/skrydziai/aplikacija/public/css/kamera.png">
                <p>Video filmavimas</p></div>
            <div class="features-column">
                <img src="/phpakademija/skrydziai/aplikacija/public/css/laikas.png">
                <p>Galima pasikeisti skrydžio laiką</p></div></span>
        </div>
    </div>
@endsection
