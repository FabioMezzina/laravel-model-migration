@extends('layouts.main')

@section('content')
    <div class="cars">
        @foreach ($cars as $car)
        <div class="car-item">
            <h2>{{ $car->marca }}</h2>
            <h3>{{ $car->modello }}</h3>
            <p>{{ $car->targa }}</p>
            <a class="cta" href="{{ route('car-detail', $car->id) }}">Show detail</a>
        </div>
        @endforeach
    </div>
@endsection