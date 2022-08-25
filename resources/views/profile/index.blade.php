@push('js')
    <script src="{{ asset('js/edit_profile.js') }}"></script>
@endpush

@extends('layouts.app')

@section('titulo')
    Editar Perfil {{auth()->user()->username}}
@endsection

@section('contenido')
<div class="md:flex md:items-center flex-col justify-center items-center">         
    <div class="md:w-8/12 lg:w-6/12 px-5 bg-white p-6 rounded-lg shadow-xl">
        @if (session('status'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('status') }}</span>            
        </div>
        @elseif (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>            
        </div>
        @endif
        <form action="{{ route('profile.store') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block text-gray-500 font-bold uppercase">
                    Nombre
                </label>
                <input type="text" id="name" name="name" placeholder="Nombre" class="border p-3 w-full rounded-lg
                @error('name') border-red-500  @enderror" value="{{auth()->user()->name}}">
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>
            <div  class="mb-5">
                <label for="username" class="mb-2 block text-gray-500 font-bold uppercase">
                    Username
                </label>
                <input type="text" id="username" name="username" placeholder="Tu nombre de usuario" class="border p-3 w-full rounded-lg
                @error('username') border-red-500  @enderror" value="{{auth()->user()->username}}">
                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>
            <div  class="mb-5">
                <label for="email" class="mb-2 block text-gray-500 font-bold uppercase">
                    Email
                </label>
                <input type="email" id="email" name="email" placeholder="Tu email de registro" class="border p-3 w-full rounded-lg
                @error('email') border-red-500  @enderror" value="{{auth()->user()->email}}">
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>
            <hr>
            <div  class="mb-5">
                <input id="update_password" name="update_password" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
                <label for="update_password" class="ml-2 font-medium text-gray-500">Actualizar password</label>                
            </div>
            <div  class="mb-5">
                <label for="old_password" class="mb-2 block text-gray-500 font-bold uppercase">
                    password
                </label>
                <input type="password" id="old_password" name="old_password" placeholder="Password anterior" class="border p-3 w-full rounded-lg
                @error('old_password') border-red-500  @enderror" disabled>
                @error('old_password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>

            <div  class="mb-5">
                <label for="password" class="mb-2 block text-gray-500 font-bold uppercase">
                    password
                </label>
                <input type="password" id="password" name="password" placeholder="Password" class="border p-3 w-full rounded-lg
                @error('password') border-red-500  @enderror" disabled>
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-1 text-center">{{$message}}</p>    
                @enderror
            </div>
            <div  class="mb-5">
                <label for="password_confirmation" class="mb-2 block text-gray-500 font-bold uppercase">
                    password
                </label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite tu password " class="border p-3 w-full rounded-lg" disabled>
            </div>

            <input type="submit"  value="Editar cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg">
        </form>
    </div>    
</div>
@endsection