<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarea extends Model
{
    use HasFactory;
    use SoftDeletes;
    

    protected $table = 'tareas';
    protected $fillable = [

        'nombre',
        'descripcion',
        'finalizada',
        'fecha_limite',
        'urgencia',
        'fecha_ingreso' // Agrega el campo fecha_ingreso al modelo


    ];

    // protected $datos = ['fecha_limite'];
    protected $casts = [
    'fecha_limite' => 'datetime',
    'fecha_ingreso' => 'datetime' // Indica que el campo es de tipo fecha/hora

];

    public const URGENCIAS = ['Baja', 'Normal', 'Alta'];

    public function urgencia() 
    {
        return self::URGENCIAS[$this->urgencia];
    }

    public function estaFinalizada()
    {
        return $this->finalizada == 1 ? 'Si' : 'No';
    }
    

}
