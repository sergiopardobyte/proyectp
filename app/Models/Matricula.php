<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Matricula
 *
 * @property $id
 * @property $fecha_matricula
 * @property $pagos_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Estmatri[] $estmatris
 * @property Pago $pago
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Matricula extends Model
{
    
    static $rules = [
		'fecha_matricula' => 'required',
		'pagos_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_matricula','pagos_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estmatris()
    {
        return $this->hasMany('App\Models\Estmatri', 'matricula_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pago()
    {
        return $this->hasOne('App\Models\Pago', 'id', 'pagos_id');
    }
    

}
