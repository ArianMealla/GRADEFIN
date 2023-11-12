<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Profesor
 *
 * @property $id
 * @property $nombre
 * @property $telefono
 * @property $email
 * @property $materias
 * @property $estudiantes_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Profesor extends Model
{
    use SoftDeletes;

    protected $table = 'profesor';
    static $rules = [
		'nombre' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'materias' => 'required',
		'estudiantes_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','telefono','email','materias','estudiantes_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'estudiantes_id', 'id');
    }


}
