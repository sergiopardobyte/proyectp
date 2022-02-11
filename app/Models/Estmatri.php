<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estmatri
 *
 * @property $id
 * @property $student_id
 * @property $matricula_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Matricula $matricula
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estmatri extends Model
{
    
    static $rules = [
		'student_id' => 'required',
		'matricula_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['student_id','matricula_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function matricula()
    {
        return $this->hasOne('App\Models\Matricula', 'id', 'matricula_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id', 'student_id');
    }
    

}
