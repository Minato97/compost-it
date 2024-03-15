<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrototipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'prototipo'=>'básico',
                'descripcion'=>'Prototipo básico con recursos a bajo costo',
                'instrucciones'=>'Consigue la lista de materiales, monta tu prototipo y listo, compostealo'
            ]
        ];
        DB::table('prototipos')->insert($data);
    }
}
