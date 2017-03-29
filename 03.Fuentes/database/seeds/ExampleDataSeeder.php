<?php

use Illuminate\Database\Seeder;

class ExampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vehiculos')->insert([
            'f_ingreso' => '2017-03-22 00:00:00',
            'placaV' => 'NAC450',
            'marcaV' => 'Renault',
            'modeloV' => '2000',
            'colorV' => 'Beige',
            'user_id' => '1',
            'created_at' => '2017-03-22 00:00:00',
            'updated_at' => '2017-03-22 00:00:00',
        ]);

        DB::table('vehiculos')->insert([
            'f_ingreso' => '2017-03-22 00:00:00',
            'placaV' => 'HBB830',
            'marcaV' => 'Mazda',
            'modeloV' => '1995',
            'colorV' => 'Verde',
            'user_id' => '1',
            'created_at' => '2017-03-22 00:00:00',
            'updated_at' => '2017-03-22 00:00:00',
        ]);

        DB::table('vehiculos')->insert([
            'f_ingreso' => '2017-03-22 00:00:00',
            'placaV' => 'HHV213',
            'marcaV' => 'Ford',
            'modeloV' => '2016',
            'colorV' => 'Azul',
            'user_id' => '1',
            'created_at' => '2017-03-22 00:00:00',
            'updated_at' => '2017-03-22 00:00:00',
        ]);

        DB::table('personas')->insert([
            'documento' => '743363242',
            'nombre' => 'Andres Fernando',
            'apellido' => 'Perez Calderon',
            'telefono' => '3127197191',
            'genero' => 'M',
            'created_at' => '2017-03-22 00:00:00',
            'updated_at' => '2017-03-22 00:00:00',
        ]);

        DB::table('personas')->insert([
            'documento' => '41312455',
            'nombre' => 'Yaqueline',
            'apellido' => 'Montoya Mejia',
            'telefono' => '3148881525',
            'genero' => 'F',
            'created_at' => '2017-03-22 00:00:00',
            'updated_at' => '2017-03-22 00:00:00',
        ]);
    }
}
