<?php

use App\Models\Empleados;

use Illuminate\Database\Seeder;

class empleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $empleado = new Empleados();
        $empleado->nomEmpleado="Rossy";
        $empleado->apePaterno="Hernandez";
        $empleado->apeMaterno="Abelino";
        $empleado->fnacimiento="1977-04-01";
        $empleado->clave="1977-04-01";
        $empleado->aby_departamentos_id=1;
        $empleado->aby_puestos_id=1;
        $empleado->aby_estado_id=1;
        $empleado->save();
    }
}
