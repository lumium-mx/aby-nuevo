<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(empresaSeeder::class);
        $this->call(departamentosSeeder::class);
        $this->call(puestosSeeder::class);
        $this->call(estadoSeeder::class);
        $this->call(empleadosSeeder::class);

    }
}
