<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            ['email' => 'Maria@gmail.com', 'usuario_id' => '1'],
            ['email' => 'Carlos@gmail.com', 'usuario_id' => '2'],
            ['email' => 'Juan@gmail.com', 'usuario_id' => '3'],
            ['email' => 'Carla@gmail.com', 'usuario_id' => '4']
            ]
        );
    }
}
