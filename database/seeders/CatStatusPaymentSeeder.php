<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatStatusPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'Cancelado'],
            ['name'=>'Pagado'],
            ['name'=>'Pago con moratorios'],
        ];
        DB::table('cat_status_payments')->insert($data);
    }
}
