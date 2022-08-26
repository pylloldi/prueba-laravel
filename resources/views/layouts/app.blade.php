<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')        
        <title>Prueba - @yield('titulo')</title>       
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{route('home')}}" class="text-3xl font-black">Prueba PYC</a>

                @auth
                    <nav class="flex gap-2 items-center"> 
                        <a href="{{route('users.index')}}" 
                            class="flex items-center gap-2 p-2 text-gray-600 bg-white border rounded text-sm uppercase font-bold cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                            </svg>  
                            Usuarios
                        </a>
                        <a href="{{route('categories.index')}}" 
                            class="flex items-center gap-2 p-2 text-gray-600 bg-white border rounded text-sm uppercase font-bold cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                            </svg>    
                            Categoría
                        </a>
                        <a href="{{route('posts.create')}}" class="flex items-center gap-2 p-2 text-gray-600 bg-white border rounded text-sm uppercase font-bold cursor-pointer mr-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>  
                            crear contenido
                        </a> 
                        <a class="font-bold text-gray-600 text-sm underline" href="{{route('posts.index', auth()->user()->username)}}">
                            <span class="font-normal">{{auth()->user()->username}}</span>
                        </a>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="font-bold text-gray-600 text-sm uppercase">Cerrar sesión</button>
                        </form>
                    </nav>
                @endauth
                
                @guest
                    <nav class="flex gap-2 items-center"> 
                        <a class="font-bold text-gray-600 text-sm uppercase" href="{{ route('login')}}">Login</a>
                        <a class="font-bold text-gray-600 text-sm uppercase" href="{{ route('register') }}">Crear cuanta</a>
                    </nav>
                @endguest
                
            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            {{ now()->year }}
        </footer>
    @stack('js')
    </body>
</html>
