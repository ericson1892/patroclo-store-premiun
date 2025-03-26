@extends('layouts.app')


@section('content')

    <div class="flex flex-wrap justify-evenly mt-4 gap-4">

        @foreach($subcategorias as $subcategoria)

            <div class="bg-gray-200 hover:bg-gray-300 w-[300px] h-[200px] p-4 rounded cursor-pointer">
                <img class="h-[130px] w-full object-cover rounded" src="{{ $subcategoria->imagen_url }}" alt="">
                <p class="text-center mt-3 font-medium text-gray-800">{{ $subcategoria->nombre }}</p>
            </div>

        @endforeach 
        
    </div>

@endsection
