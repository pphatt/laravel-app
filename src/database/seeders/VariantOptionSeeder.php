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
                "variant_option_name" => "black"
            ],
            [
                "variant_id" => 1,
                "variant_option_name" => "white"
            ],
            [
                "variant_id" => 1,
                "variant_option_name" => "blue"
            ],
            [
                "variant_id" => 2,
                "variant_option_name" => "small"
            ],
            [
                "variant_id" => 2,
                "variant_option_name" => "medium"
            ],
            [
                "variant_id" => 2,
                "variant_option_name" => "large"
            ],
        ]);
    }
}
