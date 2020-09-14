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
        // DEPARTAMENTOS DE LA ORGANIZACIÓN
        $departamento = new Departamentos();
        $departamento->clave="TI";
        $departamento->nombre = "Tecnologías de la información";
        $departamento->save();
        $departamento = new Departamentos();
        $departamento->clave="ACC";
        $departamento->nombre = "Recepción";
        $departamento->save();
        $departamento = new Departamentos();
        $departamento->clave="AAC";
        $departamento->nombre = "Atención a clientes";
        $departamento->save();
        $departamento = new Departamentos();
        $departamento->clave="REV";
        $departamento->nombre = "Revisión";
        $departamento->save();
        $departamento = new Departamentos();
        $departamento->clave="ALM";
        $departamento->nombre = "Almacén";
        $departamento->save();
        $departamento = new Departamentos();
        $departamento->clave="CTA";
        $departamento->nombre = "Contabilidad";
        $departamento->save();
        $departamento = new Departamentos();
        $departamento->clave="CXP";
        $departamento->nombre = "Cuentas por pagar";
        $departamento->save();
        $departamento = new Departamentos();
        $departamento->clave="CXC";
        $departamento->nombre = "Cuentas por cobrar";
        $departamento->save();
        $departamento = new Departamentos();
        $departamento->clave="RYH";
        $departamento->nombre = "Recursos Humanos";
        $departamento->save();

    }
}
