<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PerfilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('perfils')->insert([
            'nombre' => 'Administrador',
            'created_at' => '2017-03-19 00:00:00',
            'updated_at' => '2017-03-19 00:00:00',
        ]);
    }
}
