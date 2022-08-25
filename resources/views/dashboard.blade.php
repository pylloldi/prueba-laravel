@extends('layouts.app')

@section('titulo')
Perfil {{$user->username}} 
@endsection

@section('contenido')

<div class="flex items-center gap-2">
    <p>Perfil: {{$user->username}}</p>
    @auth
        @if ($user->id === auth()->user()->id)
        <a href="{{route('profile.index')}}" class="text-gray-500 hover:text-gray-600 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
            </svg>
        </a>            
        @endif
    @endauth
</div>

<section class="container mx-auto mt-10">
    @if($posts->count())
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($posts as $post)
            <div>
                <a href="{{route('posts.show', ['post' => $post, 'user' => $user])}}">
                    <img src="{{asset('uploads') .'/'. $post->image}}" alt="Imagen del post">
                    <p class="text-gray-600 text-sm text-center font-bold">{{$post->title}}</p>
                </a>
            </div>
            @endforeach
        </div>
        <div class="my-10">
            {{$posts->links()}}
        </div>
    @else
        <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay Publicaciones</p>
    @endif
</section>
@endsection