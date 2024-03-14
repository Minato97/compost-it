<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtapaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'etapa' => 'Mesófila',
                'descripcion' => 'Fase uno',
                'duracion' => 15
            ],
            [
                'etapa' => 'Termófila',
                'descripcion' => 'Fase dos',
                'duracion' => 15
            ],
            [
                'etapa' => 'Enfriamiento',
                'descripcion' => 'Fase tres',
                'duracion' => 15
            ],
            [
                'etapa' => 'Maduración',
                'descripcion' => 'Fase cuatro',
                'duracion' => 15
            ]
        ];
        DB::table('etapas')->insert($data);
    }
}
