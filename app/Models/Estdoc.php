<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estdoc
 *
 * @property $id
 * @property $student_id
 * @property $teacher_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Student $student
 * @property Teacher $teacher
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estdoc extends Model
{
    
    static $rules = [
		'student_id' => 'required',
		'teacher_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['student_id','teacher_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id', 'student_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teacher()
    {
        return $this->hasOne('App\Models\Teacher', 'id', 'teacher_id');
    }
    

}
