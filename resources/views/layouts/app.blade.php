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
        @auth
        <nav class="bg-white shadow-lg">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between">
                    <div class="flex space-x-7">
                        <div>
                            <!-- Website Logo -->
                            <a href="#" class="flex items-center py-4 px-2">
                                <span class="font-semibold text-gray-500 text-lg">Prueba PYC</span>
                            </a>
                        </div>
                        <!-- Primary Navbar items -->
                        <div class="hidden md:flex items-center space-x-1">
                            <a href="{{route('users.index')}}" 
                                class="flex items-center gap-2 p-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                </svg>
                                Usuarios
                            </a>
                            <a href="{{route('categories.index')}}"
                                class="flex items-center gap-2 p-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                                </svg>
                                Categorías
                            </a>
                            <a href="{{route('posts.create')}}"
                                class="flex items-center gap-2 p-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                Crear contenido
                            </a>
                            <button id="dropdownTrigger"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                                type="button">
                                {{auth()->user()->username}}
                                <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownTarget"
                                class="hidden z-10 w-auto bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                                style="position: absolute; margin: 0px; transform: translate(394px, 80px);">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                    <li>
                                        <a href="{{route('posts.index', auth()->user()->username)}}"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600">Publicaciones</a>
                                    </li>
                                    <li>
                                        <a href="{{route('profile.index')}}"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600">Editar
                                            perfil
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{route('logout')}}" method="POST">
                                            @csrf
                                            <button type="submit" class="block py-2 px-4 hover:bg-gray-100">Cerrar sesión</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button class="outline-none mobile-menu-button">
                            <svg class=" w-6 h-6 text-gray-500 hover:text-blue-500 " x-show="!showMenu" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="hidden mobile-menu">
                <ul class="">
                    <li class="border">
                        <a href="{{route('users.index')}}"
                            class="block text-sm px-2 py-4 text-gray-500 font-semibold hover:bg-blue-500 hover:text-white">
                            Usuarios
                        </a>
                    </li>
                    <li class="border">
                        <a href="{{route('categories.index')}}"
                            class="block text-sm px-2 py-4 text-gray-500 font-semibold hover:bg-blue-500 hover:text-white">
                            Categorías
                        </a>
                    </li>
                    <li class="border">
                        <a href="{{route('posts.create')}}"
                            class="block text-sm px-2 py-4 text-gray-500 font-semibold hover:bg-blue-500 hover:text-white">
                            Crear contenido
                        </a>
                    </li>
                    <li class="border">
                        <a href="{{route('posts.index', auth()->user()->username)}}"
                            class="block text-sm px-2 py-4 text-gray-500 font-semibold hover:bg-blue-500 hover:text-white">
                            Publicaciones
                        </a>
                    </li>
                    <li class="border">
                        <a href="{{route('profile.index')}}"
                            class="block text-sm px-2 py-4 text-gray-500 font-semibold hover:bg-blue-500 hover:text-white">
                            Editar Perfil
                        </a>
                    </li>
                    <li class="border">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="w-full block text-sm px-2 py-4 text-gray-500 font-semibold hover:bg-blue-500 hover:text-white text-left">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <script>    
                const dropdownTrigger = document.querySelector("#dropdownTrigger");
                const dropdownTarget = document.querySelector("#dropdownTarget");
    
                dropdownTrigger.addEventListener("click", () => {
                    dropdownTarget.classList.toggle("hidden");
                });
    
                const btn = document.querySelector("button.mobile-menu-button");
                const menu = document.querySelector(".mobile-menu");
    
                btn.addEventListener("click", () => {
                    menu.classList.toggle("hidden");
                });
            </script>
        </nav>
        @endauth
        
        @guest
        <nav class="bg-white shadow-lg">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between">
                    <div class="flex space-x-7">
                        <div>
                            <!-- Website Logo -->
                            <a href="#" class="flex items-center py-4 px-2">
                                <span class="font-semibold text-gray-500 text-lg">Prueba PYC</span>
                            </a>
                        </div>
                        <!-- Primary Navbar items -->
                        <div class="hidden md:flex items-center space-x-1">
                            <a href="{{route('login')}}" 
                                class="flex items-center gap-2 p-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                  </svg>                                  
                                login
                            </a>
                            <a href="{{route('register')}}"
                                class="flex items-center gap-2 p-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                  </svg>
                                  
                                Crear cuenta
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @endguest

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
