<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'categoria' => 'compost',
                'descripcion' => '¿Qué tipo materiales se utilizan?
A partir de diversos materiales biodegradables (desperdicios de cocina, restos agroindustriales, de cosecha, los de depuradora.
Es de gran utilidad para los suelos agrícolas ya que mejora su estructura y la fertilidad de estos.',
                'instrucciones' => 'ejemplo',
                'utilizacion_final' => 'ejemplo'
            ],
            [
                'categoria' => 'compost vegetal',
                'descripcion' => '¿Qué tipo materiales se utilizan?
A partir de diversos materiales (restos de poda, hojas, hierba cortada).
Es de gran utilidad para incrementar el rendimiento en las cosechas',
                'instrucciones' => 'ejemplo',
                'utilizacion_final' => 'ejemplo'
            ],
            [
                'categoria' => 'vermicompost',
                'descripcion' => '¿Qué tipo materiales se utilizan?
A partir de la digestión de lombrices. Este ayuda a suministrar los nutrientes necesarios para el crecimientos y producción del cultivo,
y al mismo tiempo ejercer un control biológico contra plagas que afecta la producción.',
                'instrucciones' => 'ejemplo',
                'utilizacion_final' => 'ejemplo'
            ],
        ];
        DB::table('categorias')->insert($data);
    }
}
