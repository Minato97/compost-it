<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'estatus' => 'Activo'
            ],
            [
                'estatus' => 'Inactivo'
            ],
            [
                'estatus' => 'En validación'
            ],
            [
                'estatus' => 'Suspendido'
            ],
        ];
        DB::table('estatus')->insert($data);
    }
}
