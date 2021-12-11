<?php

use Illuminate\Database\Seeder;
use App\Persona;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
            'cedula'  => '537357353',
            'nombre'  => 'Ana',
            'apellido' => 'Flores',
            'direccion' => 'calle 8 #8-53',
            'telefono'  => '3223947765'
        ]);

        Persona::create([
            'cedula'  => '539357356',
            'nombre'  => 'Luis',
            'apellido' => 'Ramirez',
            'direccion' => 'calle 1 #4-02',
            'telefono'  => '3223679675'
        ]);
    }
}
