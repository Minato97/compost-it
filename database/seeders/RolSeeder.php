<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        public function run(): void
    {
        $data = [
            [
                'rol' => 'Usuario',
            ],
            [
                'rol' => 'Organización Privada',
            ],
            [
                'rol' => 'Organización Publica',
            ],
            [
                'rol' => 'Administrador',
            ],


        ];
        DB::table('roles')->insert($data);
    }

}
