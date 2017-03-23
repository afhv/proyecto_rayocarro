<?php

use Illuminate\Database\Seeder;

class OpcionPerfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('opcion_perfil')->insert([
            'opcion_id' => '4',
            'perfil_id' => '1',
            'created_at' => '2017-03-22 00:00:00',
            'updated_at' => '2017-03-22 00:00:00',
        ]);

        DB::table('opcion_perfil')->insert([
            'opcion_id' => '6',
            'perfil_id' => '1',
            'created_at' => '2017-03-22 00:00:00',
           'updated_at' => '2017-03-22 00:00:00',
        ]);
    }
}
