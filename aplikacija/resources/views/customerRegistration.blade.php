@extends('layouts.master')

@section('content')
    <h4>Sveiki, Jūsų skrydžio numeris yra: {{request()->get('kodas')}}</h4>
    <h4>Pasirinkite pageidaujamą skrydžio datą ir laiką</h4>
<form action="{{route('registration.update', $skrydis)}}" method="POST">
@csrf

<span class="edit-span"><label for="vardas">Vardas</label>
        <input type="text" name="vardas" value="{{$skrydis->vardas}}" required></span>
    <span class="edit-span"><label for="pastas">El. paštas</label>
        <input type="text" name="pastas" value="{{$skrydis->pastas}}" required></span>
    <span class="edit-span"><label for="telefonas">Telefono nr.</label>
        <input type="text" name="telefonas" value="{{$skrydis->telefonas}}" required></span>

<select name="vietos" required>
    <option value="">Kur norėtumėte skristi?</option>
    @foreach ($list as $item){{$item->laikas}}
    <option value="{{$item->laikas}}|{{$item->vieta }}">{{ $item->laikas }} | {{ $item->vieta }}</option>
    @endforeach
</select>
    <button type="submit">Registruotis skrydžiui</button>
</form>
@endsection
