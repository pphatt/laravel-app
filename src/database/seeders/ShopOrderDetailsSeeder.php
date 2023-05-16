<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopOrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("shop_order_details")->insert([
            [
                "shop_order_id" => 1,
                "product_item_id" => 1,
                "quantity" => 2,
                "price" => 49.9
            ],
            [
                "shop_order_id" => 1,
                "product_item_id" => 2,
                "quantity" => 5,
                "price" => 175
            ],
            [
                "shop_order_id" => 1,
                "product_item_id" => 3,
                "quantity" => 2,
                "price" => 50.54
            ],
            [
                "shop_order_id" => 1,
                "product_item_id" => 4,
                "quantity" => 2,
                "price" => 50.54
            ]
        ]);
    }
}
