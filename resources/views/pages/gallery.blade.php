@extends('layouts.app')

@section('title', 'Galería')

@section('content')
    <h1>Nuestra Galería</h1>
    <p>Descubre nuestro ambiente y nuestras especialidades en nuestras sucursales.</p>

    <div class="gallery">
        <img src="{{ asset('images/cafe1.jpg') }}" alt="Café 1">
        <img src="{{ asset('images/cafe2.jpg') }}" alt="Café 2">
        <img src="{{ asset('images/cafe3.jpg') }}" alt="Café 3">
    </div>
@endsection
