@extends('layouts.app')

@section('titulo')
Perfil {{$user->username}} 
@endsection

@section('contenido')

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