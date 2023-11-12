<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Asignacion
 *
 * @property $id
 * @property $materia
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante[] $estudiantes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asignacion extends Model
{
    use SoftDeletes;

    static $rules = [
		'materia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['materia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudiantes()
    {
        return $this->hasMany('App\Models\Estudiante', 'asignacion_id', 'id');
    }


}
