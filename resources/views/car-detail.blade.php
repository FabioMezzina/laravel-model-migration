@extends('layouts.main')

@section('content')
<div class="cars">
  <div class="car-item">
    <h2>{{ $car->marca }}</h2>
    <h3>{{ $car->modello }}</h3>
    <p>{{ $car->targa }}</p>
    <a class="cta" href="{{ route('home') }}">Homepage</a>
  </div>
</div>
@endsection