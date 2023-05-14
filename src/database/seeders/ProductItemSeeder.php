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
                "price" => "24.95"
            ],
            [
                "product_id" => 2,
                "quantity" => 99,
                "price" => "35"
            ],
            [
                "product_id" => 3,
                "quantity" => 45,
                "price" => "25.27"
            ],
            [
                "product_id" => 4,
                "quantity" => 46,
                "price" => "24.98"
            ],
            [
                "product_id" => 5,
                "quantity" => 47,
                "price" => "24.98"
            ],
            [
                "product_id" => 6,
                "quantity" => 48,
                "price" => "36.56"
            ],
            [
                "product_id" => 7,
                "quantity" => 49,
                "price" => "31.98"
            ]
        ]);
    }
}
