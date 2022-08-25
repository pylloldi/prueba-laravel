@extends('layouts.app')

@section('titulo')
    Crear nueva categoría
@endsection

@section('contenido')
<div class="md:flex md:items-center flex-col justify-center items-center">         
    <div class="md:w-8/12 lg:w-6/12 px-5 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block text-gray-500 font-bold uppercase">
                    Nombre
                </label>
                <input type="text" id="name" name="name" placeholder="Nombre" class="border p-3 w-full rounded-lg
                @error('name') border-red-500  @enderror" value="{{old('name')}}">
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>
            <div  class="mb-5">
                <label for="username" class="mb-2 block text-gray-500 font-bold uppercase">
                    Username
                </label>
                <input type="text" id="username" name="username" placeholder="Tu nombre de usuario" class="border p-3 w-full rounded-lg
                @error('username') border-red-500  @enderror" value="{{old('username')}}">
                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>
            <div  class="mb-5">
                <label for="email" class="mb-2 block text-gray-500 font-bold uppercase">
                    Email
                </label>
                <input type="email" id="email" name="email" placeholder="Tu email de registro" class="border p-3 w-full rounded-lg
                @error('email') border-red-500  @enderror" value="{{old('email')}}">
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>
            <div  class="mb-5">
                <label for="password" class="mb-2 block text-gray-500 font-bold uppercase">
                    password
                </label>
                <input type="password" id="password" name="password" placeholder="Password" class="border p-3 w-full rounded-lg
                @error('password') border-red-500  @enderror">
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>
            <div  class="mb-5">
                <label for="password_confirmation" class="mb-2 block text-gray-500 font-bold uppercase">
                    password
                </label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite tu password " class="border p-3 w-full rounded-lg">
            </div>
            <input type="submit"  value="Crear usuario" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg">
        </form>
    </div>    
</div>
@endsection