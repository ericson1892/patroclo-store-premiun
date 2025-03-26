@extends('layouts.app')


@section('content')
    <h1 class="text-center text-gray-800 text-2xl font-medium">Productos en Stock</h1>
    
    <div class="flex flex-wrap justify-evenly mt-4 gap-4" >
        
        @foreach($productos as $producto)
        
            <div class="bg-gray-200 hover:bg-gray-300 w-[600px] h-[700px] p-4 rounded cursor-pointer;" >
                <img class="h-[400px] w-full object-cover rounded" src="{{ $producto->imagen_url }}" alt="">
                <p class="text-center mt-3 font-medium text-gray-800">Nombre : {{ $producto->nombre }}</p>
                <p class="text-center mt-3 font-medium text-gray-800">Codigo de Producto :{{ $producto->codigo }}</p>
                <p class="text-center mt-3 font-medium text-gray-800">Descripcion : {{ $producto->descripcion }}</p>
                <p class="text-center mt-3 font-medium text-gray-800">Especificaciones: {{ $producto->especificaciones }}</p>
                <p class="text-center mt-3 font-medium text-gray-800">Precio $$ :{{ $producto->precio_dolares }}</p>
                <p class="text-center mt-3 font-medium text-gray-800">Informacion del Fabricante : {{ $producto->informacion_fabricante_url }}</p>
            </div>
        @endforeach

    </div>

@endsection
