<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("shop_orders")->insert([
            [
                "user_id" => 1,
                "order_date" => "2023-05-12 13:29:48",
                "received_date" => "2023-12-12 13:29:48",
                "payment_method_id" => 1,
                "shipping_address" => "LA",
                "shipping_method_id" => 1,
                "order_total" => "1000",
                "order_status_id" => 1
            ],
            [
                "user_id" => 1,
                "order_date" => "2023-05-12 13:29:48",
                "received_date" => "2023-12-12 13:29:48",
                "payment_method_id" => 1,
                "shipping_address" => "JP",
                "shipping_method_id" => 1,
                "order_total" => "100",
                "order_status_id" => 1
            ]
        ]);
    }
}
