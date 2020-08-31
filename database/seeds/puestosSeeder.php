<?php

use App\Models\Puestos;

use Illuminate\Database\Seeder;

class puestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $puesto = new Puestos();
        $puesto->nombre="Directivo";
        $puesto->save();
    }
}
