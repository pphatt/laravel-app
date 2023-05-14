<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("promotions")->insert([
            [
                "promotion_name" => "Sale 30% every clothes",
                "promotion_description" => "Sale 30% on every clothes",
                "promotion_discount_rate" => 30,
                "start_time" => "2023-05-13 20:19:19",
                "end_time" => "2023-05-18 20:19:36"
            ]
        ]);
    }
}
