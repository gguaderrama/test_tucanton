<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert(
            [
            ['nombre' => 'Maria', 'equipos_id' => '1'],
            ['nombre' => 'Carlos', 'equipos_id' => '2'],
            ['nombre' => 'Juan', 'equipos_id' => '3'],
            ['nombre' => 'Carla', 'equipos_id' => '4']
            ]
        );
    }
}
