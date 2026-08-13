@extends('layouts.app')
@section('content')
@php
     $colores = ['bg-green-400', 'bg-yellow-400', 'bg-red-400'];
@endphp

@foreach ($personas as $persona)
     <div class="{{ $colores[$loop->index % count($colores)] }} text-white text-center p-5 text-4xl font-bold m-6 rounded-lg">
          <h1>Nombre: {{ $persona['nombre'] }}</h1>
          <h2>Apellido: {{ $persona['apellido'] }}</h2>
          <h3>Edad: {{ $persona['edad'] }}</h3>
     </div>

@endforeach
@endsection