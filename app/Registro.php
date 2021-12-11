<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registros';

    protected $fillable = [
        'id',
        'nombre'
    ];

    public function registros()
    {
        return $this->hasMany('App\Registro','registro_id');
    }
}
