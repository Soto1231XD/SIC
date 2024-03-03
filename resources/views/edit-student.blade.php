@extends('plantilla')

@section('titulo')
    Docentes
@endsection

@section('edit_estudiante')
<div class=" flex items-center justify-between">
    <div class="w-full ml-16 px-4"> 
        <h2 class="text-2xl font-bold mb-4 ml-8">Editar estudiante</h2> 
        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('estudiantes.update', $student->id)}}" method="POST" class="bg-blue-500 rounded px-0.5 py-0.5 mb-4">
            @csrf
            @method('put')
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">
                <div class="mb-4">
                    <label for="name_student" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" value="{{$student->name_student}}" name="name_student" id="name_student" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="lastname_student" class="block text-gray-700 text-sm font-bold mb-2">Apellido:</label>
                    <input type="text" value="{{$student->lastname_student}}" name="lastname_student" id="lastname_student" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="id_student" class="block text-gray-700 text-sm font-bold mb-2">Matricula:</label>
                    <input type="text" value="{{$student->id_student}}"  name="id_student" id="id_student" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
