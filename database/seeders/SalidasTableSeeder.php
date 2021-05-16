<?php

namespace Database\Seeders;

use App\Models\TipoSalida;
use Illuminate\Database\Seeder;

class SalidasTableSeeder extends Seeder
{
    public function run()
    {
        $tipo_salidas = [
            [
                'id'    => 1,
                'title' => 'Venta',
            ],
            [
                'id'    => 2,
                'title' => 'Ajuste',
            ],
            [
                'id'    => 3,
                'title' => 'Producto perecedero',
            ],
        ];

        TipoSalida::insert($tipo_salidas);
    }
}