<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentosSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departamentos')->insert([
            ['depa_nomb' => 'AMAZONAS'],
            ['depa_nomb' => 'ANCASH'],
            ['depa_nomb' => 'APURIMAC'],
            ['depa_nomb' => 'AREQUIPA'],
            ['depa_nomb' => 'AYACUCHO'],
            ['depa_nomb' => 'CAJAMARCA'],
            ['depa_nomb' => 'PROV. CONST. DEL CALLAO'],
            ['depa_nomb' => 'CUSCO'],
            ['depa_nomb' => 'HUANCAVELICA'],
            ['depa_nomb' => 'HUANUCO'],
            ['depa_nomb' => 'ICA'],
            ['depa_nomb' => 'JUNIN'],
            ['depa_nomb' => 'LA LIBERTAD'],
            ['depa_nomb' => 'LAMBAYEQUE'],
            ['depa_nomb' => 'LIMA'],
            ['depa_nomb' => 'LORETO'],
            ['depa_nomb' => 'MADRE DE DIOS'],
            ['depa_nomb' => 'MOQUEGUA'],
            ['depa_nomb' => 'PASCO'],
            ['depa_nomb' => 'PIURA'],
            ['depa_nomb' => 'PUNO'],
            ['depa_nomb' => 'SAN MARTIN'],
            ['depa_nomb' => 'TACNA'],
            ['depa_nomb' => 'TUMBES'],
            ['depa_nomb' => 'UCAYALI'],
        ]);
    }
}
