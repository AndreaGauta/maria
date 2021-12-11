<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected  $table = 'personas';

    protected $fillable = [
        'id',
        'cedula',
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'imagen'
    ];

    public function libros ()
    {
        return $this->hasMany('App\Libro' , 'persona_id');
    }
}
