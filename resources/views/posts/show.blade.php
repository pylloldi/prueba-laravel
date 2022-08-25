@extends('layouts.app')

@section('titulo')
{{$post->title}}
@endsection

@section('contenido')

<div class="container mx-auto flex">    
    <div class="md:w-1/2">
        <img src="{{asset('uploads') .'/'. $post->image}}" alt="Imagen del post {{$post->titulo}}">        
    </div>
    <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:my-0">
        @guest
            <p class="font-bold">{{ $post->user->username }}</p>
            <p class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }} <span class="text-gray-800 underline">{{$post->category->name}}</span></p>
            <div class="my-5">
                <h3 class="font-bold">Descripción</h3>
                <p>{{$post->description}}</p>
            </div>
            <div class="my-5">
                <h3 class="font-bold">Observaciones</h3>
                <p>{{$post->observations}}</p>
            </div>            
            <div class="my-5">
                <h3 class="font-bold">Categoría</h3>
                <p>{{$post->category->name}}</p>
            </div>            
        @endguest 
        
        @auth
        @if ($post->user_id === auth()->user()->id)
            <form action="{{ route('posts.update', $post->id) }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="title" class="mb-2 block text-gray-500 font-bold uppercase">
                        Nombre
                    </label>
                    <input type="text" id="title" name="title" placeholder="Título de la publicación" class="border p-3 w-full rounded-lg
                    @error('title') border-red-500  @enderror" value="{{$post->title}}">
                    @error('title')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="description" class="mb-2 block text-gray-500 font-bold uppercase">
                        Descripción
                    </label>
                    <textarea id="description" name="description" placeholder="Descripción de la publicación" class="border p-3 w-full rounded-lg
                    @error('description') border-red-500  @enderror" >{{$post->description}}</textarea>
                    @error('description')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="observations" class="mb-2 block text-gray-500 font-bold uppercase">
                        Observaciones
                    </label>
                    <textarea id="observations" name="observations" placeholder="Observaciones de la publicación" class="border p-3 w-full rounded-lg
                    @error('observations') border-red-500  @enderror" >{{$post->observations}}</textarea>
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
                            <option value="{{$category->id}}" @if( $category->id === $post->category_id ) selected @endif>
                                {{$category->name}}
                            </option>    
                        @endforeach
                    </select>                    
                    @error('categories')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="hidden" name="image" value="{{$post->image}}" />
                    @error('image')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                    @enderror
                </div>
                <input type="submit" value="Editar puclicación" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg my-2">
            </form>
            <form action="{{route('posts.destroy', $post)}}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" value="Elimnar puclicación" class="bg-red-600 hover:bg-red-700 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg my-2">
            </form>
        @else
            <p class="font-bold">{{ $post->user->username }}</p>
            <p class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }} <span class="text-gray-800 underline">{{$post->category->name}}</span></p>
            <div class="my-5">
                <h3 class="font-bold">Descripción</h3>
                <p>{{$post->description}}</p>
            </div>
            <div class="my-5">
                <h3 class="font-bold">Observaciones</h3>
                <p>{{$post->observations}}</p>
            </div>                       
        @endif
        @endauth
    </div>    
</div>
@endsection