@extends('layouts.master')
@section('content')
    <div class="main-content preke-inner">
  @foreach($product as $item)
      <div class="item">
        <img src="{{$item['paveikslelis']}}">
          <h2>{{$item['pavadinimas']}}</h2>
          <p>{{$item['aprasymas']}}</p>
          <p class="price">{{$item['kaina']}} €</p>
          <a href="{{route('thankyou',$item['id'] )}}" class="mygtukas">Pirkti</a>
      </div>
        @endforeach
    </div>

@endsection
