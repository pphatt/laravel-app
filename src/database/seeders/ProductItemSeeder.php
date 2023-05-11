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
        DB::table("product_item")->insert([
            [
                "product_id" => 1,
                "quantity" => 100,
                "price" => "50"
            ],
            [
                "product_id" => 2,
                "quantity" => 100,
                "price" => "399.000"
            ],
            [
                "product_id" => 2,
                "quantity" => 45,
                "price" => "399.000"
            ],
            [
                "product_id" => 3,
                "quantity" => 46,
                "price" => "399.000"
            ],
            [
                "product_id" => 3,
                "quantity" => 47,
                "price" => "399.000"
            ]
        ]);
    }
}
