@extends('layouts.app')


@section('content')

    <div class="flex  flex-col justify-evenly mt-4 gap-4">
        <h1 class=" text-center  top-2 bg-sky-500 hover:bg-sky-700 h-[40px] rounded">Lista de Marcas</h1>
        @foreach($marcas as $marca)
            <ul class="list-disc ">
            
            <li>Marca : {{ $marca->nombre }}</li>
            <li>Codigo de Pais: {{ $marca->codigo_pais }}</li>
            </ul>
        @endforeach 
        
    </div>

@endsection
