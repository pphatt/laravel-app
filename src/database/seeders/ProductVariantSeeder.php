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
        DB::table("product_variants")->insert([
            [
                "variant_option_id" => 1,
                "product_item_id" => 1
            ],
            [
                "variant_option_id" => 4,
                "product_item_id" => 1
            ],
            [
                "variant_option_id" => 1,
                "product_item_id" => 3
            ],
            [
                "variant_option_id" => 4,
                "product_item_id" => 3
            ],
        ]);
    }
}
