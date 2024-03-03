@extends('plantilla')

@section('table_students')
<div class="overflow-x-auto">
    <div class="text-center mb-4">
        <h2 class="text-2xl font-bold">Lista de estudiantes</h2> 
    </div>
    @if(session()->has('notificacion'))
    <div style="color: blue">{{session('notificacion')}}</div>
    @endif
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-800 text-white">
                <th class="px-8 py-4">Matricula</th>
                <th class="px-4 py-2">Nombre del alumno</th>
                <th class="px-4 py-2">Apellido</th>
                <th class="px-4 py-2">Mostrar</th>
                <th class="px-4 py-2">Opciones</th>
                <th class="px-4 py-2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr class="hover:bg-gray-200 transition-colors">
                <td class="border px-4 py-2 whitespace-nowrap">{{ $student->id_student }}</td>
                <td class="border px-4 py-2 whitespace-nowrap">{{ $student->name_student }}</td>
                <td class="border px-4 py-2 whitespace-nowrap">{{$student->lastname_student}}</td>
                <td class="border px-4 py-2 whitespace-nowrap"><a href="{{route('estudiantes.show', $student->id)}}">Mostrar</a> </td>
                <td class="border px-4 py-2 whitespace-nowrap"><a href="{{route('estudiantes.edit',$student->id)}}">Editar</a></td>
                <td class="border px-4 py-2 whitespace-nowrap">
                    <form action="{{ route('estudiantes.destroy', $student->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>{{ $students->links()}}</div>
</div>
@endsection
