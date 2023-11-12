<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Estudiante;
use App\Models\Profesor;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


/**
 * Class NotaController
 * @package App\Http\Controllers
 */
class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::paginate();

        return view('nota.index', compact('notas'))
            ->with('i', (request()->input('page', 1) - 1) * $notas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nota = new Nota();
        $estudiantes = Estudiante::pluck('paterno','id');
        $profesor = Profesor::pluck('nombre','id');
        return view('nota.create', compact('nota', 'estudiantes', 'profesor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Nota::$rules);

        $nota = Nota::create($request->all());

        return redirect()->route('notas.index')
            ->with('success', 'Nota created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nota = Nota::find($id);

        return view('nota.show', compact('nota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nota = Nota::find($id);
        $estudiantes = Estudiante::pluck('paterno','id');
        $profesor = Profesor::pluck('nombre','id');

        return view('nota.edit', compact('nota','estudiantes','profesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nota $nota)
    {
        request()->validate(Nota::$rules);

        $nota->update($request->all());

        return redirect()->route('notas.index')
            ->with('success', 'Nota updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nota = Nota::find($id)->delete();

        return redirect()->route('notas.index')
            ->with('success', 'Nota deleted successfully');
    }

    public function generar_pdf(){
        $notas = Nota::all();
        $pdf = PDF::loadView('Nota.generar_pdf', compact('notas'));
        return $pdf->download('notas.pdf');
    }

    public function generar_pdf_estudiante($id_estudiante){
        $estudiante = Estudiante::find($id_estudiante);
        $notas = Nota::where('estudiantes_id',$id_estudiante)->get();
        $pdf = PDF::loadView('Nota.generar_notas_pdf', compact('notas','estudiante'));
        return $pdf->download('notas.pdf');

    }

}
