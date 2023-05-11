<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("product")->insert([
            [
                "product_name" => "Planet Her",
                "category_id" => 1,
                "description" => "Something Doja Cat",
                "artist_id" => 1,
            ],
            [
                "product_name" => "AIRism Cotton Áo Thun Cổ Tròn Dáng Rộng",
                "category_id" => 2,
                "description" => "Chất liệu vải 'AIRism' mềm mại. Kiểu dáng rộng thời trang.",
                "artist_id" => 2,
            ],
            [
                "product_name" => "Áo Thun Dry-EX Cổ Tròn Ngắn Tay",
                "category_id" => 2,
                "description" => "Áo thun được thiết kế để tạo sự thoải mái mát mẻ. Hoàn hảo cho các hoạt động thể thao.",
                "artist_id" => 2,
            ]
        ]);
    }
}
