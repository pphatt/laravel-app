<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("variant_options")->insert([
            [
                "variant_id" => 1,
                "variant_option_name" => "Black"
            ],
            [
                "variant_id" => 1,
                "variant_option_name" => "White"
            ],
            [
                "variant_id" => 1,
                "variant_option_name" => "Blue"
            ],
            [
                "variant_id" => 2,
                "variant_option_name" => "XS"
            ],
            [
                "variant_id" => 2,
                "variant_option_name" => "S"
            ],
            [
                "variant_id" => 2,
                "variant_option_name" => "M"
            ],
            [
                "variant_id" => 2,
                "variant_option_name" => "L"
            ],
            [
                "variant_id" => 2,
                "variant_option_name" => "XL"
            ]
        ]);
    }
}
