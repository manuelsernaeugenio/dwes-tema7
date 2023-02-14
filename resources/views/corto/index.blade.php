@extends('plantilla')

@section('titulo', 'Listado de cortos')

@section('contenido')
    <ul>
        @forelse($cortos as $corto)
        <li>{{ $corto['titulo'] }} ({{$corto['autor']}})</li>
        @empty
        <li>No nada que mostrar</li>
        @endforelse
    </ul>
@endsection