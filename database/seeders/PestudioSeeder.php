<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PestudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pestudios')->insert([
            'semestre_id' => '1',
            'especialidade_id' => '1',
            'asignatura' => 'ÁLGEBRA',
            'asignatura_completa' => 'ÁLGEBRA',
            'horas_semana' => '4',
            'clave_asignatura' => '343101-17DB',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
