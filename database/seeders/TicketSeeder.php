<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'date' => Carbon::create('2024', '03', '03'),
                'price' => 50.00,
                'train_id' => 1,
                'ticket_type_id' => 1,
            ],
            [
                'date' => Carbon::create('2024', '04', '04'),
                'price' => 60.00,
                'train_id' => 2,
                'ticket_type_id' => 2,
            ],
            [
                'date' => Carbon::create('2024', '05', '05'),
                'price' => 70.00,
                'train_id' => 3,
                'ticket_type_id' => 3,
            ],
        ]);
    }
}
