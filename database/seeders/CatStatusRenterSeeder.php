<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatStatusRenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
         ['name'=>'Activo'],
         ['name'=>'Activo Moroso'],
         ['name'=>'Inactivo']
        ];
        DB::table('cat_status_renters')->insert($data);
    }
}
