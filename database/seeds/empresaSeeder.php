<?php

use App\Models\Empresa;

use Illuminate\Database\Seeder;

class empresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $empresa = new Empresa();
        $empresa->clave="RYH";
        $empresa->nombre="Productos Rossy";
        $empresa->representante="Rossy";
        $empresa->rfc="HEAR770401XXX";
        $empresa->save();
    }
}
