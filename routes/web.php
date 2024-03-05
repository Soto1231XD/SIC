<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DocentesController;

    use App\Http\Controllers\StudentController;

    use App\Http\Controllers\SubjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/maestros', [DocentesController::class, 'index']);

    Route::resource('estudiantes',StudentController::class);

    Route::delete('estudiantes/{id}', [StudentController::class, 'destroy'])->name('estudiantes.destroy');

    Route::resource('estudiantes', StudentController::class);
    Route::resource('asignaturas', SubjectController::class);
    

    Route::get('/formulario', function () {
        return view('formulario');
    })->name('formulario');
});

require __DIR__.'/auth.php';
