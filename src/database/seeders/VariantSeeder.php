<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("variants")->insert([
            [
                "category_id" => 2,
                "variant_name" => "Color"
            ],
            [
                "category_id" => 2,
                "variant_name" => "Size"
            ]
        ]);
    }
}
