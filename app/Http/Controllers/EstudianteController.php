<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Estudiante;
use App\Models\Asignacion;
use Barryvdh\DomPDF\Facade\Pdf;


class EstudianteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('student.index')->with('estudiantes', $estudiantes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $asignacions = Asignacion::all();
        return view('student.create' ,compact('asignacions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Estudiante::$rules);
        $estudiantes = new Estudiante();
        $estudiantes->paterno = $request->get('paterno');
        $estudiantes->materno = $request->get('materno');
        $estudiantes->nombres = $request->get('nombres');
        $estudiantes->ci = $request->get('ci');
        $estudiantes->zona = $request->get('zona');
        $estudiantes->direccion = $request->get('direccion');
        $estudiantes->telefono = $request->get('telefono');
        $estudiantes->NomPadre = $request->get('NomPadre');
        $estudiantes->NomMadre = $request->get('NomMadre');
        $estudiantes->ocupacion = $request->get('ocupacion');

        $estudiantes->fecnac = $request->get('fecnac');
        $estudiantes->lugarnac = $request->get('lugarnac');
        $estudiantes->genero = $request->get('genero');
        $estudiantes->lugarEstu = $request->get('lugarEstu');
        $estudiantes->email = $request->get('email');
        $estudiantes->añoEscolar = $request->get('añoEscolar');
        $estudiantes->añoBachiller = $request->get('añoBachiller');
        $estudiantes->asignacions_id = $request->get('asignacions_id');


        $estudiantes->save();

        return redirect('/student');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estudiantes = Estudiante::find($id);

        return view('student.show', compact('estudiantes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $asignacions = Asignacion::all();
        $estudiante = Estudiante::find($id);
        return view('student.edit', compact('estudiante','asignacions'))->with('estudiante',$estudiante);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate(Estudiante::$rules);
        $estudiante = Estudiante::find($id);

        $estudiante->paterno = $request->get('paterno');
        $estudiante->materno = $request->get('materno');
        $estudiante->nombres = $request->get('nombres');
        $estudiante->ci = $request->get('ci');
        $estudiante->zona = $request->get('zona');
        $estudiante->direccion = $request->get('direccion');
        $estudiante->telefono = $request->get('telefono');
        $estudiante->NomPadre = $request->get('NomPadre');
        $estudiante->NomMadre = $request->get('NomMadre');
        $estudiante->ocupacion = $request->get('ocupacion');

        $estudiante->fecnac = $request->get('fecnac');
        $estudiante->lugarnac = $request->get('lugarnac');
        $estudiante->genero = $request->get('genero');
        $estudiante->lugarEstu = $request->get('lugarEstu');
        $estudiante->email = $request->get('email');
        $estudiante->añoEscolar = $request->get('añoEscolar');
        $estudiante->añoBachiller = $request->get('añoBachiller');
        $estudiante->asignacions_id = $request->get('asignacions_id');


        $estudiante->save();

        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();

        return redirect('/student');
    }

    public function generar_pdf(){
        $estudiantes = Estudiante::all();
        $pdf = PDF::loadView('pdf.estudiantes', compact('estudiantes'));
        return $pdf->download('estudiantes.pdf');
    }



}
