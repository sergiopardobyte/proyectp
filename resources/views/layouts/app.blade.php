<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Instituto Quito</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">Estudiantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('teacher.index') }}">Docentes</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('career.index') }}">Carreras</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('subjects.index') }}">Materias</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('semesters.index') }}">Semestres</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('modules.index') }}">Modulos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('section.index') }}">Seccion</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('pagos.index') }}">Pagos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('matricula.index') }}">Matricula</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('estmatri.index') }}">MatriculaEstudiante</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('estdoc.index') }}">EstudianteDocente</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('docmate.index') }}">DocenteMateria</a>
                        </li>
                    @endif
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

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
</body>
</html>
