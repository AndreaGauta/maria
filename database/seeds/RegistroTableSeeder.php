<?php

use Illuminate\Database\Seeder;
use App\Registro;

class RegistroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Registro::create([
            'nombre' => 'Ana'
        ]);

        Registro::create([
            'nombre' => 'Luis'
        ]);

        Registro::create([
            'nombre' => 'Fernando'
        ]);
    }
}
