<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Module
 *
 * @property $id
 * @property $name_m
 * @property $beginning_m
 * @property $end_m
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Module extends Model
{
    
    static $rules = [
		'name_m' => 'required',
		'beginning_m' => 'required',
		'end_m' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_m','beginning_m','end_m'];



}
