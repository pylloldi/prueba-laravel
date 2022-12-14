@extends('layouts.app')

@section('titulo')
    Categorías
@endsection

@section('contenido')
<a href="{{ route('categories.create') }}"
    class="flex items-center p-2 gap-2 text-white bg-green-600 hover:bg-green-700 rounded text-sm uppercase font-bold cursor-pointer w-32">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" />
      </svg>      
        Categoría
</a>
<div class="md:flex md:items-center flex-col justify-center items-center">
    <div class="md:w-10/12 lg:w-8/12 px-5 bg-white p-6 rounded-lg shadow-xl">
    <table class="w-full text-sm text-left text-gray-700">
        <thead class="text-xs text-gray-700 uppercase">
            <tr>
                <th scope="col" class="py-3 px-6">#</th>
                <th scope="col" class="py-3 px-6">Nombre</th>
                <th scope="col" class="py-3 px-6">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->name}}</td>
                    <td class="flex items-center gap-2">
                        <a href="{{ route('categories.show', $category) }}"
                            class="flex items-center p-2 text-white bg-sky-600 hover:bg-sky-700 rounded text-sm uppercase font-bold cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                              </svg>
                        </a>
                        <form action="{{route('categories.destroy', $category)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a href="#"
                                class="flex items-center p-2 text-white bg-red-600 hover:bg-red-700 rounded text-sm uppercase font-bold cursor-pointe"
                                onclick="this.closest('form').submit();return false";>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </form>                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection