@extends('layouts.master')

@section('content')
    <div class="create-main">
        <a class="mygtukas sukurti" href="{{ route('flylocationdate.index')  }}">
            Atgal
        </a>
        <form class="edit-row" action="{{ route('flylocationdate.update', $flylocationdate) }}" method="POST">

            @method('PATCH')
            @csrf

            <span class="edit-span"><label for="vieta">Skrydžio vieta</label>
        <input type="text" name="vieta" value="{{$flylocationdate->vieta}}"></span>
            <span class="edit-span"><label for="laikas">Skrydžio laikas</label>
        <input type="text" name="laikas" value="{{$flylocationdate->laikas}}"></span>
            <span class="edit-span"><label for="busena">Skrydžio būsena: naujas | uzregistruotas | ivykdytas</label>
        <input type="text" name="busena" value="{{$flylocationdate->busena}}"></span>
            <input class="mygtukas" type="submit" value="Atnaujinti">

        </form>
    </div>
@endsection
