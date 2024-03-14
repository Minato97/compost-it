<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nombres' => 'Benito',
                'apellido_paterno' => 'Juarez',
                'apellido_materno' => 'Gonzalez',
                'email' => 'ejemplo@gmail.com',
                'password' => bcrypt('123456'),
                'id_roles' => 1
            ],

        ];
        DB::table('users')->insert($data);
    }
}
