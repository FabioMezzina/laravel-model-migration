@extends('layouts.main')

@section('content')
<div class="items">
  <div class="item">
    <h2>{{ $car->marca }}</h2>
    <h3>{{ $car->modello }}</h3>
    <p>{{ $car->targa }}</p>
    <a class="cta" href="{{ route('home') }}">Homepage</a>
  </div>
</div>
@endsection