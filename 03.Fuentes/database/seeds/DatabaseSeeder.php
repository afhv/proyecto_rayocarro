<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PerfilsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(OpcionsTableSeeder::class);
        $this->call(OpcionPerfilTableSeeder::class);

        $this->call(ExampleDataSeeder::class);
    }
}
