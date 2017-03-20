<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('123456'),
            'perfil_id' => '1',
            'created_at' => '2017-03-19 00:00:00',
            'updated_at' => '2017-03-19 00:00:00',
        ]);
    }
}
