<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => 'Tren AAA 000',
                'passengers' => 250,
                'year' => 2000,
                'train_type_id' => 1,
            ],
            [
                'name' => 'Tren BBB 111',
                'passengers' => 230,
                'year' => 2010,
                'train_type_id' => 2,
            ],
            [
                'name' => 'Tren CCC 222',
                'passengers' => 270,
                'year' => 2020,
                'train_type_id' => 3,
            ],
        ]);
    }
}
