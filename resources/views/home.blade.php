@push('js')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush

@extends('layouts.app')

@section('titulo')
    Principal
@endsection

@section('contenido')
<div class=" containerner m-auto md:w-8/12">
    <form class="w-full" accept="{{route('home')}}" method="GET">
        <div class="flex items-center border-b border-gray-500 py-2">
            <div class="inline-block relative w-64">
                <select id="search-by" name="by" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option value = "title">Título</option>
                    <option value = "category">Categoría</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
            
            <input id="search-byI" name="q" class="block appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Título y/o Descripción" aria-label="Full name">
            <select id="category_id" name="category_id" class="hidden appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Seleccionar categoría</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>    
                @endforeach
            </select>
            <button class="flex-shrink-0 bg-sky-500 hover:bg-sky-700 border-sky-500 hover:border-sky-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>              
            </button>
            <a href="{{ route('posts.export') }}" id="export-excel"
                class="flex items-center gap-2 ml-3 bg-green-500 hover:bg-green-700 border-green-500 hover:border-green-700 text-sm border-4 text-white py-1 px-2 rounded cursor-pointer" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
                Excel                                
            </a>
        </div>
    </form>
</div>

<section class="container mx-auto mt-10">
    
    @if($posts->count())
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($posts as $post)
            <div>
                <a href="{{route('posts.show', ['post' => $post, 'user' => $post->user])}}">
                    <img src="{{asset('uploads') .'/'. $post->image}}" alt="Imagen del post">
                    <p class="text-gray-600 text-sm text-center font-bold">{{$post->title}}</p>
                </a>
            </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay Publicaciones</p>
    @endif
</section>
@endsection