<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';


    protected $fillable = [
        'id',
        'nombre',
        'genero',
        'N paginas',
        'registro_id',
        'año',
        'persona_id'
    ];

      
    public function persona ()
    {
        return $this->belongsTo('App\Persona' , 'persona_id');
    }

    public function registro()
    {
        return $this->belongsTo('App\Registro','registro_id');
    }
}
