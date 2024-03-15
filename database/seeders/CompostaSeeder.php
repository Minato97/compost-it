<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompostaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nombre' => 'Mi primer composta',
                'id_etapas' => 1,
                'id_users' => 1,
                'id_categorias' => 1,
                'id_prototipos' => 1
            ],
            [
                'nombre' => 'Composta de lombriz',
                'id_etapas' => 1,
                'id_users' => 2,
                'id_categorias' => 3,
                'id_prototipos' => 1
            ],
        ];
            DB::table('compostas')->insert($data);
    }
}
