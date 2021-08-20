<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
        [
            'name' =>'Velronn',
            'designer_id' => 1,
            'creation_year' => '2001',
            'bd_name' =>"HardLand",
        ],
        [
            'name' =>'Basile Landouye',
            'designer_id' => 2,
            'creation_year' => '1974',
            'bd_name' =>"Léonard",
        ],
        [
            'name' =>'les chahutas',
            'designer_id' => 3,
            'creation_year' => '1987',
            'bd_name' =>"Marsupilami",
        ]
        ]);
    }

}