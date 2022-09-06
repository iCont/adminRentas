<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
          ['name'=>1,
          'precio_renta'=>1000,
        ],
          [
            'name'=>2,
            'precio_renta'=>1000,
        ],
          [
            'name'=>3,
            'precio_renta'=>1000,
        ],
          [
            'name'=>4,
            'precio_renta'=>1000,
        ],
          [
            'name'=>5,
            'precio_renta'=>1000,

        ],
          [
            'name'=>6,
            'precio_renta'=>1000,
        ],
          [
            'name'=>7,
            'precio_renta'=>1000,

        ],
          [
            'name'=>8,
            'precio_renta'=>1000,

        ],
          [
            'name'=>9,
            'precio_renta'=>1000,

        ],
          [
          'name'=>10,
          'precio_renta'=>1000,

        ],
    ];
        DB::table('cat_apartments')->insert($data);
    }
}
