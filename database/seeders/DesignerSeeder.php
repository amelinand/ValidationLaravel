<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designers')->insert([
        [
            'name' =>'Brau Pascal',
            'birth_year' => '1960',
            'nationality' =>"Francaise",
        ],
        [
            'name' =>'Bob De Groot',
            'birth_year' => '1941',
            'nationality' =>"Belge",
        ],
        [
            'name' =>'André Franquin',
            'birth_year' => '1924',
            'nationality' =>"Francaise",
        ]
        ]);
    }

}