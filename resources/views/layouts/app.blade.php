<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')        
        <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
        <title>Prueba - @yield('titulo')</title>       
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            {{-- <div class="container mx-auto flex justify-between items-center"> --}}
               
                <nav class="px-2 bg-white border-gray-200">
                    <div class="container flex flex-wrap justify-between items-center mx-auto">
                        <a href="{{route('home')}}" class="text-3xl font-black">Prueba PYC</a>                

                        @auth
                        <button data-collapse-toggle="mobile-menu" type="button" 
                            class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300" aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Abrir menú</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                            <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                                <li>
                                    <a href="{{route('users.index')}}" class="flex items-center 
                                    class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0" aria-current="page">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                        </svg>  
                                        Usuarios
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('categories.index')}}" class="flex items-center 
                                    class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0" aria-current="page">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                                        </svg>    
                                        Categoría
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('categories.index')}}" class="flex items-center 
                                    class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0" aria-current="page">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                        </svg>  
                                        Crear contenido
                                    </a>
                                </li>
                                <li>
                                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                                        {{auth()->user()->username}} 
                                        <svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownNavbar" class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow 
                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(339px, 66px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                                        <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white" aria-labelledby="dropdownLargeButton">
                                            <li>
                                                <a href="{{route('posts.index', auth()->user()->username)}}" class="block py-2 px-4 hover:bg-gray-100">
                                                    Publicaciones
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('profile.index')}}" class="block py-2 px-4 hover:bg-gray-100">
                                                    Editar perfil
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <form action="{{route('logout')}}" method="POST">
                                                @csrf
                                                <button type="submit" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Cerrar sesión</button>
                                            </form>
                                            {{-- <a href="{{route('logout')}}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Cerrar sesión</a> --}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        {{-- <nav class="flex gap-2 items-center"> 
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
                        </nav> --}}
                        @endauth
                
                    @guest

                        <nav class="flex gap-2 items-center"> 
                            <a class="font-bold text-gray-600 text-sm uppercase" href="{{ route('login')}}">Login</a>
                            <a class="font-bold text-gray-600 text-sm uppercase" href="{{ route('register') }}">Crear cuanta</a>
                        </nav>
                    @endguest
                    </div>
                </nav>
                
            {{-- </div> --}}
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
