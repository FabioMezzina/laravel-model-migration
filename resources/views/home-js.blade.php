@extends('layouts.main')

@section('content')
    <div class="items" id="app">
        {{-- manage with javascript --}}
        <div class="item" v-for="bike in bikes">
            <h2>@{{ bike.brands }}</h2>
            <h3>@{{ bike.model }}</h3>
            <p>@{{ bike.power }}</p>
            <p>@{{ bike.color }}</p>
            <p>@{{ bike.price }}</p>
        </div>
    </div>
@endsection

<script defer src="{{ asset('js/app.js') }}"></script>