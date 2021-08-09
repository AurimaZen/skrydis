@extends('layouts.master')

@section('content')

    <a href="{{ route('skrydis.show', $id ?? '')  }}">
        {{ $vardas ?? '' }} - [{{$pastas ?? ''}}] - {{$telefonas ?? ''}} - {{$vieta ?? ''}}
        - {{$laikas ?? ''}} - {{$busena ?? ''}}
    </a>
    <a href="{{ route('skrydis.edit', $id ?? '')  }}">
        [Edit]
    </a>
    <form action="{{ route('skrydis.index', $id ?? '') }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Destroy">
    </form>

@endsection
