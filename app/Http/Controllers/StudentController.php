<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\RedirectResponse;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::paginate(10);
        return view ('students',compact( 'students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name_student' => 'required',
            'lastname_student' => 'required',
            'birthday' => 'required|date',
            'id_student' => 'required|unique:students,id_student',
            'comments'  => 'max:255'
        ]);
    
        Student::create($request->all());
    
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $student=Student::find($id);
        //dd($student);
        return view('show-student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $student=Student::find($id);
        return view('edit-student', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, $id): RedirectResponse
    {
        //Busca el alumno
        $student=Student::find($id);
        //Actualiza
        $student->update($request->all());
        //Lo manda a la lista de los estudiantes
        return redirect('estudiantes')->with('notificacion','Estudiante editado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encuentra el estudiante por su ID
    $student = Student::find($id);

    if (!$student) {
        // Si no se encuentra el estudiante, redirige con un mensaje de error
        return redirect()->route('estudiantes.index')->with('error', 'Estudiante no encontrado.');
    }

    // Elimina el estudiante de la base de datos
    $student->delete();

    // Redirige de vuelta a la lista de estudiantes con un mensaje de éxito
    return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado exitosamente.');
    }
}
