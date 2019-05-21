<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Equipo
 * @package App\Models
 * @version May 21, 2019, 3:27 am UTC
 *
 * @property string nombre
 * @property string codigo
 */
class Equipo extends Model
{
    use SoftDeletes;

    public $table = 'equipos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'codigo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'codigo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
