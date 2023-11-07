<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $Cantidad
 * @property $Plazo
 * @property $Inicia
 * @property $Finaliza
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'Cantidad' => 'required',
		'Plazo' => 'required',
		'Inicia' => 'required',
		'Finaliza' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Cantidad','Plazo','Inicia','Finaliza'];



}
