<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $id
 * @property $document
 * @property $name
 * @property $last_name
 * @property $email
 * @property $phone
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
    
    static $rules = [
		'document' => 'required|min:10|max:10|regex:/^[0-9]+$/',
		'name' => 'required|alpha',
		'last_name' => 'required|alpha',
		'email' => 'required',
		'phone' => 'required|min:10|max:10|regex:/^[0]{1}[0-9]{9}+$/',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['document','name','last_name','email','phone'];



}
