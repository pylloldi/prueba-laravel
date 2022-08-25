@extends('layouts.app')

@section('titulo')
Inicia sesión
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
        <img src="{{ asset('img/login.jpg') }}">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{ route('login') }}" method="POST">
            @csrf

            @if(session('mensaje'))
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{session('mensaje')}}</p>    
            @endif
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
           
            <input type="submit"  value="Iniciar sesión" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>
@endsection