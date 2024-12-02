<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <svg width="50" height="50" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet">
            <path d="M245.235 153.524c14.012-14.012 14.011-36.811 0-50.823-6.787-6.788-15.812-10.525-25.411-10.525-2.28 0-4.523.208-6.712.617 9.538-6.524 15.72-17.495 15.72-29.694 0-19.816-16.122-35.937-35.938-35.937-12.223 0-23.213 6.205-29.733 15.776 2.157-11.377-1.226-23.537-9.87-32.18C146.506 3.97 137.48.232 127.882.232c-9.6 0-18.624 3.738-25.412 10.526-8.643 8.643-12.026 20.803-9.87 32.18-6.519-9.57-17.509-15.776-29.733-15.776-19.815 0-35.936 16.12-35.936 35.937 0 12.2 6.18 23.17 15.718 29.694a36.487 36.487 0 0 0-6.711-.617c-9.6 0-18.624 3.738-25.411 10.526C3.738 109.489 0 118.514 0 128.112c0 9.6 3.738 18.624 10.526 25.412 6.787 6.787 15.812 10.526 25.41 10.526 2.28 0 4.523-.208 6.712-.618-9.538 6.525-15.718 17.496-15.718 29.695 0 19.815 16.12 35.936 35.936 35.936 12.224 0 23.215-6.206 29.734-15.776-2.157 11.378 1.226 23.538 9.87 32.18 6.787 6.788 15.812 10.526 25.41 10.526 9.6 0 18.625-3.738 25.412-10.526 8.643-8.643 12.026-20.803 9.869-32.18 6.52 9.57 17.51 15.776 29.733 15.776 19.816 0 35.937-16.12 35.937-35.936 0-12.2-6.18-23.17-15.719-29.695 2.189.41 4.433.618 6.712.618 9.599 0 18.624-3.739 25.411-10.526"/><path d="M234.391 113.538c-8.049-8.048-21.099-8.048-29.148 0h-42.184l29.829-29.828c11.383 0 20.61-9.228 20.61-20.611 0-11.383-9.227-20.612-20.61-20.612-11.384 0-20.611 9.229-20.611 20.612l-29.829 29.829V50.743c8.049-8.049 8.049-21.099 0-29.148-8.05-8.05-21.1-8.05-29.149 0s-8.049 21.1 0 29.148v42.185l-29.828-29.83c0-11.382-9.228-20.61-20.611-20.61-11.383 0-20.611 9.228-20.611 20.61 0 11.384 9.228 20.612 20.61 20.612l29.83 29.828H50.504c-8.05-8.049-21.1-8.048-29.15 0-8.048 8.05-8.048 21.1 0 29.15 8.05 8.048 21.1 8.048 29.15 0h42.183L62.86 172.515c-11.383 0-20.611 9.227-20.611 20.61 0 11.384 9.228 20.612 20.61 20.612 11.384 0 20.612-9.228 20.612-20.611l29.828-29.829v42.184c-8.049 8.049-8.049 21.1 0 29.149 8.05 8.049 21.1 8.049 29.15 0 8.048-8.05 8.048-21.1 0-29.15v-42.183l29.828 29.829c0 11.383 9.227 20.61 20.61 20.61 11.384 0 20.612-9.227 20.612-20.61 0-11.384-9.228-20.611-20.611-20.611l-29.83-29.829h42.185c8.05 8.05 21.1 8.05 29.148 0 8.05-8.049 8.05-21.1 0-29.149" fill="#FFB13B"/></svg>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            @role('admin')
                                <li class="nav-item"> 
                                <a class="nav-link" href="{{ route('autores.index') }}">Autor</a> 
                                </li> 
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{ route('editoriales.index') }}">Editoriales</a> 
                                </li> 
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{ route('categorias.index') }}">Categorias</a> 
                                </li> 
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{ route('materiales.index') }}">Materiales</a> 
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{ route('prestamos.index') }}">Prestamos</a> 
                                </li> 
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{ route('reservas.index') }}">Reservas</a> 
                                </li>
                                <li class="nav-item"> 
                                <a class="nav-link" href="{{ route('dashboardbook.index') }}">Dashboard Libros</a> 
                                </li> 
                                <a href="{{ route('home') }}" class="btn btn-primary">
                                    <i class="fas fa-home"></i> Ir a Inicio
                                </a>
                                <a href="{{ route('logout') }}"
                                style="background: linear-gradient(to bottom, #ff7f50, #cc4c4c); /* Degradado de rojo a rojo oscuro */
                                    box-shadow: inset 0px 2px 5px rgba(255, 0, 0, 0.3); /* Sombra roja */
                                    color: #fff;
                                    text-decoration: none;
                                    padding: 10px 20px;
                                    border-radius: 5px;"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                            </a>
                            @endrole 
                            @role('bibliotecario')
                                <li class="nav-item"> 
                                <a class="nav-link" href="{{ route('autores.index') }}">Autor</a> 
                                </li> 
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{ route('editoriales.index') }}">Editoriales</a> 
                                </li> 
                                
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{ route('materiales.index') }}">Materiales</a> 
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{ route('prestamos.index') }}">Prestamos</a> 
                                </li> 
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{ route('reservas.index') }}">Reservas</a> 
                                </li>
                                <a href="{{ route('home') }}" class="btn btn-primary">
                                    <i class="fas fa-home"></i> Ir a Inicio
                                </a>
                                <a href="{{ route('logout') }}"
                                style="background: linear-gradient(to bottom, #ff7f50, #cc4c4c); /* Degradado de rojo a rojo oscuro */
                                    box-shadow: inset 0px 2px 5px rgba(255, 0, 0, 0.3); /* Sombra roja */
                                    color: #fff;
                                    text-decoration: none;
                                    padding: 10px 20px;
                                    border-radius: 5px;"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                            </a>
                            @endrole 
                            @role('usuario')
                                 <li class="nav-item"> 
                                <a class="nav-link" href="{{ route('prestamos.index') }}">Prestamos</a> 
                                </li> 
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{ route('reservas.index') }}">Reservas</a> 
                                </li>
                                <a href="{{ route('home') }}" class="btn btn-primary">
                                    <i class="fas fa-home"></i> Ir a Inicio
                                </a>
                            <a href="{{ route('logout') }}"
                                style="background: linear-gradient(to bottom, #ff7f50, #cc4c4c); /* Degradado de rojo a rojo oscuro */
                                    box-shadow: inset 0px 2px 5px rgba(255, 0, 0, 0.3); /* Sombra roja */
                                    color: #fff;
                                    text-decoration: none;
                                    padding: 10px 20px;
                                    border-radius: 5px;"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                            </a>
                            @endrole 
                           
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
@yield('javascript') 
</body>
</html>
