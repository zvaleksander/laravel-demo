<?php

use App\Parametro;
use Illuminate\Database\Seeder;

class ParametrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parametro::create([
        	'id' 			=> 100,
        	'descripcion' 	=> 'PARAMETRO 100',
        	'estado' 		=> 1
        ]);

        Parametro::create([
        	'id' 			=> 101,
        	'descripcion' 	=> 'PARAMETRO 100',
        	'estado' 		=> 1
        ]);

        Parametro::create([
        	'id' 			=> 102,
        	'descripcion' 	=> 'PARAMETRO 102',
        	'estado' 		=> 0
        ]);
    }
}
