<?php

use App\Dominio;
use Illuminate\Database\Seeder;

class DominiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Dominio::create([
    		'id' => 1000,
    		'id_parametro' => 100,
    		'descripcion' => 'DOMINIO 1000',
    		'estado' => 1
    	]);

    	Dominio::create([
    		'id' => 1001,
    		'id_parametro' => 100,
    		'descripcion' => 'DOMINIO 1001',
    		'estado' => 1
    	]);

    	Dominio::create([
    		'id' => 1010,
    		'id_parametro' => 101,
    		'descripcion' => 'DOMINIO 1010',
    		'estado' => 1
    	]);

    	Dominio::create([
    		'id' => 1020,
    		'id_parametro' => 102,
    		'descripcion' => 'DOMINIO 1020',
    		'estado' => 1
    	]);
    }
}
