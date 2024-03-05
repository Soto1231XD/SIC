@extends('plantilla')

@section('contenido')
<div class="overflow-x-auto">
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-800 text-white">
                <th class="px-4 py-2">Campo</th>
                <th class="px-4 py-2">Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-gray-200 transition-colors">
                <td class="border px-4 py-2">Nombre del alumno:</td>
                <td class="border px-4 py-2">{{$student->name_student}}</td>
            </tr>
            <tr class="hover:bg-gray-200 transition-colors">
                <td class="border px-4 py-2">Apellido del alumno:</td>
                <td class="border px-4 py-2">{{$student->lastname_student}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
