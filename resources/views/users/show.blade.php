@extends('layouts.app')

@section('titulo')
    Editar usuario {{$user->username}}
@endsection

@section('contenido')
<div class="md:flex md:items-center flex-col justify-center items-center">         
    <div class="md:w-8/12 lg:w-6/12 px-5 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block text-gray-500 font-bold uppercase">
                    Nombre
                </label>
                <input type="text" id="name" name="name" placeholder="Nombre" class="border p-3 w-full rounded-lg
                @error('name') border-red-500  @enderror" value="{{$user->name}}">
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>
            <div  class="mb-5">
                <label for="username" class="mb-2 block text-gray-500 font-bold uppercase">
                    Username
                </label>
                <input type="text" id="username" name="username" placeholder="Tu nombre de usuario" class="border p-3 w-full rounded-lg
                @error('username') border-red-500  @enderror" value="{{$user->username}}">
                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>
            <div  class="mb-5">
                <label for="email" class="mb-2 block text-gray-500 font-bold uppercase">
                    Email
                </label>
                <input type="email" id="email" name="email" placeholder="Tu email de registro" class="border p-3 w-full rounded-lg
                @error('email') border-red-500  @enderror" value="{{$user->email}}">
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>            
            <input type="submit" value="Editar usuario" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg">
        </form>
    </div>    
</div>
@endsection