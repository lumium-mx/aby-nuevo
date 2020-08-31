<?php

use App\Models\Estado;

use Illuminate\Database\Seeder;

class estadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $estado = new Estado();
        $estado->nombre="Activo";
        $estado->save();

    }
}
