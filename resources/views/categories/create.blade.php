@extends('layouts.app')

@section('titulo')
    Crear categoría
@endsection

@section('contenido')
<div class="md:flex md:items-center flex-col justify-center items-center">         
    <div class="md:w-8/12 lg:w-6/12 px-5 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block text-gray-500 font-bold uppercase">
                    Nombre
                </label>
                <input type="text" id="name" name="name" placeholder="Nombre de la categoría" class="border p-3 w-full rounded-lg
                @error('name') border-red-500  @enderror" value="{{old('name')}}">
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>
            <div class="mb-5">
                <label for="description" class="mb-2 block text-gray-500 font-bold uppercase">
                    Descripción
                </label>
                <textarea id="description" name="description" placeholder="Descripción de la categoría" class="border p-3 w-full rounded-lg
                @error('description') border-red-500  @enderror" >{{old('description')}}</textarea>
                @error('description')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>
            <input type="submit"  value="Crear categoría" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg">
        </form>
    </div>    
</div>
@endsection