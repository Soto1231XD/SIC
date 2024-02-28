@extends('plantilla')

@section('titulo')
    Docentes
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full overflow-x-auto ml-20">
            <h2 class="text-2xl font-bold mb-4">Calificaciones</h2>

            <div class="flex justify-between mb-4">
                <!-- Tarjeta -->
                <div class="bg-blue-500 text-white p-4 rounded-md w-1/2 mr-2">
                    <h3 class="text-lg font-bold mb-2">Promedio Preliminar</h3>
                    <p class="text-xl">8.5</p>
                </div>

                <div class="bg-blue-500 text-white p-4 rounded-md w-1/2 ml-2">
                    <h3 class="text-lg font-bold mb-2">Calificación Preliminar</h3>
                    <p class="text-xl">Aprobado</p>
                </div>
            </div>
            

            <!-- Tabla de calificaciones -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="px-8 py-4">Alumno</th>
                            <th class="px-4 py-2">Matrícula</th>
                            <th class="px-4 py-2">Aplicaciones de IOT</th>
                            <th class="px-4 py-2">Aplicación web I4.0</th>
                            <th class="px-4 py-2">EOYE</th>
                            <th class="px-4 py-2">Integradora</th>
                            <th class="px-4 py-2">Inglés V</th>
                            <th class="px-6 py-4">Base de Datos</th>
                            <th class="px-4 py-2">Desarrollo Móvil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-200 transition-colors">
                            <td class="border px-4 py-2">Jose Soto</td>
                            <td class="border px-4 py-2">21393203</td>
                            <td class="border px-4 py-2">93</td>
                            <td class="border px-4 py-2">83</td>
                            <td class="border px-4 py-2">90</td>
                            <td class="border px-4 py-2">---</td>
                            <td class="border px-4 py-2">---</td>
                            <td class="border px-4 py-2">---</td>
                            <td class="border px-4 py-2">---</td>
                        </tr>
                        <tr class="hover:bg-gray-200 transition-colors">
                            <td class="border px-4 py-2">Axel Ramirez</td>
                            <td class="border px-4 py-2">22382376</td>
                            <td class="border px-4 py-2">89</td>
                            <td class="border px-4 py-2">88</td>
                            <td class="border px-4 py-2">100</td>
                            <td class="border px-4 py-2">---</td>
                            <td class="border px-4 py-2">----</td>
                            <td class="border px-4 py-2">----</td>
                            <td class="border px-4 py-2">----</td>
                        </tr>
                        <tr class="hover:bg-gray-200 transition-colors">
                            <td class="border px-4 py-2">Anahi Cituk</td>
                            <td class="border px-4 py-2">22348765</td>
                            <td class="border px-4 py-2">100</td>
                            <td class="border px-4 py-2">90</td>
                            <td class="border px-4 py-2">85</td>
                            <td class="border px-4 py-2">---</td>
                            <td class="border px-4 py-2">----</td>
                            <td class="border px-4 py-2">----</td>
                            <td class="border px-4 py-2">----</td>
                        </tr>
                        <tr class="hover:bg-gray-200 transition-colors">
                            <td class="border px-4 py-2">Anna Perez</td>
                            <td class="border px-4 py-2">22786654</td>
                            <td class="border px-4 py-2">100</td>
                            <td class="border px-4 py-2">95</td>
                            <td class="border px-4 py-2">80</td>
                            <td class="border px-4 py-2">---</td>
                            <td class="border px-4 py-2">----</td>
                            <td class="border px-4 py-2">----</td>
                            <td class="border px-4 py-2">----</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
