@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@extends('layouts.app')

@section('titulo')
    Crear nueva publicación
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data"
                id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:my-0">
            <form action="{{ route('posts.store') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="title" class="mb-2 block text-gray-500 font-bold uppercase">
                        Nombre
                    </label>
                    <input type="text" id="title" name="title" placeholder="Título de la publicación" class="border p-3 w-full rounded-lg
                    @error('title') border-red-500  @enderror" value="{{old('title')}}">
                    @error('title')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="description" class="mb-2 block text-gray-500 font-bold uppercase">
                        Descripción
                    </label>
                    <textarea id="description" name="description" placeholder="Descripción de la publicación" class="border p-3 w-full rounded-lg
                    @error('description') border-red-500  @enderror" >{{old('description')}}</textarea>
                    @error('description')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="observations" class="mb-2 block text-gray-500 font-bold uppercase">
                        Observaciones
                    </label>
                    <textarea id="observations" name="observations" placeholder="Observaciones de la publicación" class="border p-3 w-full rounded-lg
                    @error('observations') border-red-500  @enderror" >{{old('observations')}}</textarea>
                    @error('observations')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="categories" class="mb-2 block text-gray-500 font-bold uppercase">
                        Categoría
                    </label>
                    <select name="categories" id="categories" class="border p-3 w-full rounded-lg bg-white
                    @error('observations') border-red-500  @enderror">
                        <option value="">-- Seleccionar Categoría --</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->name}}
                            </option>    
                        @endforeach
                    </select>                    
                    @error('categories')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="hidden" name="image" value="{{old('image')}}" />
                    @error('image')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                    @enderror
                </div>
                <input type="submit"  value="Crear puclicación" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection