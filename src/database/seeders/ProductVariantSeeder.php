<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("product_variant")->insert([
            [
                "variant_option_id" => 1,
                "product_item_id" => 2
            ],
            [
                "variant_option_id" => 4,
                "product_item_id" => 2
            ],
            [
                "variant_option_id" => 2,
                "product_item_id" => 3
            ],
            [
                "variant_option_id" => 3,
                "product_item_id" => 4
            ],
            [
                "variant_option_id" => 2,
                "product_item_id" => 5
            ],
            [
                "variant_option_id" => 4,
                "product_item_id" => 5
            ]
        ]);
    }
}
