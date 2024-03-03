<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{asset('fontawesome-free-6.5.1-web/css/all.min.css')}}" rel="stylesheet"/>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-500 p-4 flex justify-between">
        <div class="flex items-center">
            <span class="text-white font-bold text-2xl">Sistema de Calificaciones</span>
            <i class="fa-brands fa-laravel fa-2xl text-white ml-4"></i>
        </div>
        <div class="flex items-center">
            <i class="fa-solid fa-envelope fa-xl text-white mr-4"></i>
            <i class="fa-solid fa-bell fa-xl text-white mr-4"></i>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-white font-bold bg-blue-500 hover:bg-blue-400 transition-colors px-4 py-2 rounded-md">Cerrar sesión</button>
            </form>
        </div>
    </nav>
    
    <div class="flex">
        <!-- Sidebar -->
        <aside class="bg-gray-800 text-white w-60 min-h-screen">
            <ul class="p-4">
                <li>
                    <a href="{{ url('/maestros') }}" class="flex items-center py-2 transition duration-500 ease-in-out hover:bg-blue-500 hover:text-white">
                        <span class="mr-4">Calificaciones</span>
                        <i class="fa-solid fa-chart-simple"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('estudiantes.index') }}" class="flex items-center py-2 transition duration-500 ease-in-out hover:bg-blue-500 hover:text-white">
                        <span class="mr-4">Estudiantes</span>
                        <i class="fas fa-graduation-cap"></i>
                    </a>
                </li>
                
                <li>
                    <a href="#" class="flex items-center py-2 transition duration-500 ease-in-out hover:bg-blue-500 hover:text-white">
                        <span class="mr-6">Docentes</span>
                        <i class="fas fa-chalkboard-user"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center py-2 transition duration-500 ease-in-out hover:bg-blue-500 hover:text-white">
                        <span class="mr-12">Pagos</span>
                        <i class="fa-solid fa-money-bill"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center py-2 transition duration-500 ease-in-out hover:bg-blue-500 hover:text-white">
                        <span class="mr-10">Temario</span>
                        <i class="fa-solid fa-file"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center py-2 transition duration-500 ease-in-out hover:bg-blue-500 hover:text-white">
                        <span class="mr-12">Becas</span>
                        <i class="fas fa-graduation-cap"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('estudiantes.create') }}" class="flex items-center py-2 transition duration-500 ease-in-out hover:bg-blue-500 hover:text-white">
                        <span class="mr-4">Crear estudiante</span>
                        <i class="fas fa-graduation-cap"></i>
                    </a>
                </li>
            </ul>
        </aside>
        
        <!-- Contenido principal -->
        <main class="w-full lg:w-3/4 xl:w-2/3 p-4 flex justify-center">
            @yield('contenido')
            
            @yield('crear_estudiante')

            @yield('table_students')

            @yield('edit_estudiante')
        
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white p-4 mt-auto">
        <div class="container mx-auto text-center">
            <p>Todos los derechos reservados &copy; {{ date('Y') }}</p>
        </div>
    </footer>
</body>
</html>
