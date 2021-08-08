@extends('layouts.master')

@section('content')
    <h4>Sveiki, įveskite skrydžio kodą</h4>
    <form  class="edit-row" action="{{ route('checkforrow') }}"method="POST">
        @method('POST')
        @csrf
            <label for="exampleInputEmail1">Skrydzio kodas</label>
            <input type="text"  name="reiksme"  placeholder="Skrydzio kodas">

        <button type="submit" class="btn btn-primary">Užsiregistruoti skrydžiui</button>
    </form>
@endsection
