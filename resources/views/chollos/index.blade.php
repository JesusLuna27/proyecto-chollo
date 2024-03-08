@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Chollos Disponibles</h1>
        @foreach ($chollos as $chollo)
            <div class="chollo">
                <img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.png') }}" alt="{{ $chollo->titulo }}"
                    style="width:100%; max-width:300px; height:auto;">

                <h3>{{ $chollo->titulo }}</h3>
                <p>{{ $chollo->descripcion }}</p>
                <p>Precio: {{ $chollo->precio }} | Precio con descuento: {{ $chollo->precio_descuento }}</p>

                <!-- Botones de Editar y Borrar -->
                <a href="{{ route('chollos.edit', $chollo->id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Editar
                </a>

                <form action="{{ route('chollos.destroy', $chollo->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i> Borrar
                    </button>
                </form>

                <a href="{{ url('/chollos', $chollo->id) }}" class="btn btn-primary">Ver Chollo</a>
            </div>
        @endforeach
    </div>
@endsection
