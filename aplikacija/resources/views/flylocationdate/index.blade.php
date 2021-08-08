@extends('layouts.master')

@section('content')
    <h1>Skrydžių datos ir laikai</h1>
    <a class="mygtukas sukurti" href="{{route('flylocationdate.create')}}">Sukurti laiko ir datos įrašą</a><br>
    @foreach ($list as $flylocationdate)

        <div class="admin-panel datalaikas">
            <div class="line">
                <a href="{{ route('flylocationdate.show', $flylocationdate)  }}">
                    <span>{{ $flylocationdate->laikas }}</span><span> {{$flylocationdate->vieta}}</span> <span>{{$flylocationdate->busena}}</span>
                </a>
                <a  class="mygtukas redaguoti" href="{{ route('flylocationdate.edit', $flylocationdate->id)  }}">Redaguoti skrydį</a>
                <form action="{{ route('flylocationdate.destroy',  $flylocationdate->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input class="mygtukas istrinti" type="submit" value="Ištrinti skrydžio laiką ir datą">
                </form>
            </div>
        </div>

    @endforeach
@endsection
