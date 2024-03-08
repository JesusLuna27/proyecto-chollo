@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <!-- Título y bienvenida -->
        <h1 class="my-4">Bienvenido a Chollo ░▒▓ Ofertas</h1>
        <p class="lead mb-5">Tu sitio web líder para encontrar las mejores ofertas y descuentos en Internet.</p>

        <a href="{{ route('chollos.index') }}" class="btn btn-success btn-lg mb-4">Ver Chollos Disponibles</a>
        <div class="call-to-action">
            <h2>¿Quieres compartir una oferta?</h2>
            <p>Si has encontrado una oferta que crees que debería estar aquí, ¡SÚBELA!</p>
            <a href="{{ route('chollos.create') }}" class="btn btn-info btn-lg">Subir Chollo</a>
        </div>
    </div>
@endsection
