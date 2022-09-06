<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatStatusApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'Disponible'],
            ['name'=>'Ocupado'],
            ['name'=>'Reparación']
        ];
        DB::table('cat_status_apartments')->insert($data);
    }
}
