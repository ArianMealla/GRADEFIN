<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Nota
 *
 * @property $id
 * @property $estudiantes_id
 * @property $profesor_id
 * @property $nota
 * @property $comentario
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @property Profesor $profesor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nota extends Model
{
    use SoftDeletes;

    static $rules = [
		'estudiantes_id' => 'required',
		'profesor_id' => 'required',
		'nota' => 'required',
		'comentario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estudiantes_id','profesor_id','nota','comentario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'id', 'estudiantes_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profesor()
    {
        return $this->hasOne('App\Models\Profesor', 'id', 'profesor_id');
    }


}
