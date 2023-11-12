<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends Model
{
    use SoftDeletes;
    protected $table = 'estudiantes';
    static $rules = [
        'paterno' =>'required',
        'materno' =>'required',
        'nombres' =>'required',
        'ci' =>'required',
        'zona' =>'required',
        'direccion' =>'required',
        'telefono' =>'required | numeric',
        'NomPadre' =>'required',
        'NomMadre' =>'required',
        'ocupacion' =>'required',

        'lugarnac' =>'required',
        'lugarEstu' =>'required',
        'email' =>'required | email',
        'añoEscolar' =>'required | numeric',
        'añoBachiller' =>'required | numeric',

    ];
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['paterno','materno', 'nombres','ci','zona','direccion',
    'telefono','NomPadre','NomMadre','ocupacion','CImadre','CIpadre','lugarnac',
    'lugarEstu','email','añoEscolar','calificacion','comentario'];
    use HasFactory;

    public function asignacion()
    {
        return $this->belongsTo('App\Models\Asignacion', 'asignacions_id', 'id');
    }
}
