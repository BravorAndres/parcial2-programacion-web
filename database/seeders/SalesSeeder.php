<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;
use League\CommonMark\Extension\Table\Table;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([[
            'nombre_Vendedor' => 'Juan',
            'nombre_cliente' => 'Pedro',
            'nombre_producto' => 'Coca Cola',
            'precio' => '10',
            'fecha_compra' => '2021-05-07',
        ],[
            'nombre_Vendedor' => 'Pedro',
            'nombre_cliente' => 'Juan',
            'nombre_producto' => 'Pepsi',
            'precio' => '15',
            'fecha_compra' => '2021-05-07',
        ]]);
    }
}
