@extends('plantilla')

@section('content')
<div class="p-4">
    <h1 class="text-2xl font-bold mb-4">Unidades por asignatura</h1>
    <div class="bg-gray-100 p-4 rounded-md mb-4">
        <h2 class="text-lg font-bold mb-2">Unidades:</h2>
        <ul class="list-disc list-inside">
            @foreach($units as $unit)
            <li>{{ $unit }}</li>
            @endforeach
        </ul>
    </div>

    <div class="bg-gray-100 p-4 rounded-md">
        <h2 class="text-lg font-bold mb-2">Asignatura de la unidad 2:</h2>
        <p>{{ $subject[0]->subject_name }}</p>
    </div>
</div>
@endsection
