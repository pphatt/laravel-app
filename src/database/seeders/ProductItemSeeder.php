<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("product_items")->insert([
            [
                "product_id" => 1,
                "quantity" => 100,
            ],
            [
                "product_id" => 2,
                "quantity" => 99,
            ],
            [
                "product_id" => 3,
                "quantity" => 45,
            ],
            [
                "product_id" => 4,
                "quantity" => 46,
            ],
            [
                "product_id" => 5,
                "quantity" => 47,
            ],
            [
                "product_id" => 6,
                "quantity" => 48,
            ],
            [
                "product_id" => 7,
                "quantity" => 49,
            ]
        ]);
    }
}
