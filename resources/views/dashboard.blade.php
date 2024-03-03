<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Mensaje de bienvenida -->
                    <div class="text-center">
                        <h1 class="text-3xl font-semibold text-gray-900 mb-2">¡Bienvenido al Sistema de Integración de Calificaciones!</h1>
                        <p class="text-lg text-gray-700">Aquí puedes gestionar las calificaciones de los estudiantes y más.</p>
                    </div>

                    <!-- Sección de información adicional -->
                    <div class="mt-8">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">¿Qué puedes hacer aquí?</h2>
                        <ul class="list-disc list-inside text-gray-700">
                            <li>Gestionar las calificaciones de los estudiantes.</li>
                            <li>Ver y editar la información de los maestros.</li>
                            <li>Generar reportes y estadísticas sobre el desempeño académico.</li>
                            <li>Configurar ajustes y preferencias del sistema.</li>
                        </ul>
                    </div>

                    <!-- Enlace para ver la lista de alumnos -->
                    <div class="mt-4">
                        <p class="text-gray-700">¿Quieres ver la lista de alumnos?</p>
                        <a href="{{ route('estudiantes.index') }}" class="text-blue-500 hover:text-blue-600 font-semibold">Ver lista de alumnos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
