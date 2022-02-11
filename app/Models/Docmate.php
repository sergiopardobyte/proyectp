<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docmate
 *
 * @property $id
 * @property $teacher_id
 * @property $subject_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Subject $subject
 * @property Teacher $teacher
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docmate extends Model
{
    
    static $rules = [
		'teacher_id' => 'required',
		'subject_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['teacher_id','subject_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subject()
    {
        return $this->hasOne('App\Models\Subject', 'id', 'subject_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teacher()
    {
        return $this->hasOne('App\Models\Teacher', 'id', 'teacher_id');
    }
    

}
