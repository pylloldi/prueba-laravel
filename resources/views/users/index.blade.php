@extends('layouts.app')

@section('titulo')
    Usuarios
@endsection
@section('contenido')
<div class="md:flex md:items-center flex-col justify-center items-center">
    <a href="{{ route('users.create') }}"
        class="flex items-center p-2 gap-2 text-white bg-green-600 hover:bg-green-700 rounded text-sm uppercase font-bold cursor-pointer w-32">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" />
          </svg>      
            Usuario
    </a>
    <div class="md:w-10/12 lg:w-8/12 px-5 bg-white p-6 rounded-lg shadow-xl">
    <table class="w-full text-sm text-left text-gray-700">
        <thead class="text-xs text-gray-700 uppercase">
            <tr>
                <th scope="col" class="py-3 px-6">#</th>
                <th scope="col" class="py-3 px-6">Nombre</th>
                <th scope="col" class="py-3 px-6">Nombre de usuario</th>
                <th scope="col" class="py-3 px-6">Email</th>
                <th scope="col" class="py-3 px-6">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{ route('users.show', $user) }}"
                            class="flex items-center p-2 text-white bg-sky-600 hover:bg-sky-700 rounded text-sm uppercase font-bold cursor-pointer w-9">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                              </svg>
                        </a>                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection