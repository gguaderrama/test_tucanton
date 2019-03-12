<?php

use Illuminate\Database\Seeder;

class EquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('equipos')->insert(
            [
            ['nombre' => 'Laptop'],
            ['nombre' => 'Televisor'],
            ['nombre' => 'Ventilador'],
            ['nombre' => 'Celular']
            ]
        );
    }
}
