<?php

use App\Models\Departamentos;

use Illuminate\Database\Seeder;

class departamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $departamento = new Departamentos();
        $departamento->clave="RYH";
        $departamento->nombre="Productos Rossy";
        $departamento->save();
    }
}
