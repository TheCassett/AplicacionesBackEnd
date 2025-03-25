@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <section class="hero">
        <h1>Cafetería " El Peninsular "</h1>
        <p>Disfruta del mejor café con un ambiente único.</p>
        <img src="{{ asset('images/cafeteria.jpg') }}" alt="Nuestra cafetería">
    </section>

    <section class="features">
        <div class="feature">
            <img src="{{ asset('images/cafe1.jpg') }}" alt="Café especial">
            <h2>Café de Especialidad</h2>
            <p>Granos seleccionados y tostados artesanalmente por agricultores de la region.</p>
        </div>
        <div class="feature">
            <img src="{{ asset('images/pan.jpg') }}" alt="Panadería">
            <h2>Panadería Artesanal</h2>
            <p>Acompaña tu café con nuestro delicioso pan recién horneado de nuestros pobladores.</p>
        </div>
        <div class="feature">
            <img src="{{ asset('images/ambiente.jpg') }}" alt="Ambiente acogedor">
            <h2>Ambiente Acogedor</h2>
            <p>Espacios diseñados para tu comodidad y relajación.</p>
        </div>
    </section>
@endsection
