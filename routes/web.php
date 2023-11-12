<?php
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::resource('student', 'App\Http\Controllers\EstudianteController');
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('profesors', App\Http\Controllers\ProfesorController::class);
Route::resource('asignacions', App\Http\Controllers\AsignacionController::class);
Route::resource('notas', App\Http\Controllers\NotaController::class);

Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
Route::resource('permission', PermissionController::class);

Route::get('imp-pdf', '\App\Http\Controllers\EstudianteController@generar_pdf')->name('descargar-pdf');

Route::get('download-pdf', '\App\Http\Controllers\NotaController@generar_pdf')->name('desc-pdf');

Route::get('download-estudiante-pdf/{id}', '\App\Http\Controllers\NotaController@generar_pdf_estudiante')->name('desc-estudiante-pdf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
