<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatConceptPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            ['name'=>'Depósito'],
            ['name'=>'Renta'],
            ['name'=>'Otro'],
        ];
        DB::table('cat_concept_payments')->insert($data);
    }
}
