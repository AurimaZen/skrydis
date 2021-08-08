@extends('layouts.master')

@section('content')

    <a href="{{ route('flylocationdate.show', $id ?? '')  }}">
        {{$vieta ?? ''}} - {{$laikas ?? ''}} - {{$busena ?? ''}}
    </a>
    <a href="{{ route('skrydis.edit', $id ?? '')  }}">
        [Edit]
    </a>
    <form action="{{ route('flylocationdate.index', $id ?? '') }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Destroy">
    </form>

@endsection
