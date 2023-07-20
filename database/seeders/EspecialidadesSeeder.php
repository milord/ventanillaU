<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('especialidades')->insert([
            'especialidade' => 'COMPONENTE BASICO Y PROPEDEUTICO',
            'area_estudios' => 'COMPONENTE BASICO Y PROPEDEUTICO',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('especialidades')->insert([
            'especialidade' => 'ELECTRONICA',
            'area_estudios' => 'FISICO-MATEMATICAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('especialidades')->insert([
            'especialidade' => 'CONSTRUCCION',
            'area_estudios' => 'FISICO-MATEMATICAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('especialidades')->insert([
            'especialidade' => 'SOPORTE Y MANTENIMIENTO DE EQUIPO DE COMPUTO',
            'area_estudios' => 'FISICO-MATEMATICAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('especialidades')->insert([
            'especialidade' => 'PROGRAMACION',
            'area_estudios' => 'FISICO-MATEMATICAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('especialidades')->insert([
            'especialidade' => 'CONTABILIDAD',
            'area_estudios' => 'ECONOMICO-ADMINISTRATIVAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('especialidades')->insert([
            'especialidade' => 'GERICULTURA',
            'area_estudios' => 'QUIMICO-BIOLOGICAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
