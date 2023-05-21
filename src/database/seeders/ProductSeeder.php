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
        DB::table("products")->insert([
            [
                "product_name" => "Ultra Magic T-Shirt",
                "category_id" => 2,
                "description" => "Ultra Magic T-Shirt",
                "price" => 20,
                "image_alt" => "Ultra Magic T-Shirt",
                "image_1" => "1684641786/uq6am5SsNRcDXCAOXz1osGnEAFH6SRnu0nJb5bpx.webp",
                "image_2" => "1684641786/CxPaia2PrjsXhFohRGy6fV9EZkvDieSJHVVPDYuw.webp",
                "artist_id" => 1,
            ],
            [
                "product_name" => "Ultra Magic",
                "category_id" => 1,
                "description" => "Ultra Magic",
                "price" => 20,
                "image_alt" => "Ultra Magic",
                "image_1" => "1684641930/Mc5XPOXqTm1pim7wEysgZKLJvTq2acJOtotBtvim.webp",
                "image_2" => "1684641930/mF1csOHRP4FKHNYsSic4JZAym3Fhtd96xE9gLgm7.webp",
                "artist_id" => 1,
            ],
            [
                "product_name" => "Megabat Tee",
                "category_id" => 2,
                "description" => "Megabat Tee",
                "price" => 20,
                "image_alt" => "Megabat Tee",
                "image_1" => "1684641991/KEJ23Ii0QVUEw4gVWOQREuS8IarFLOnoIzm5046M.webp",
                "image_2" => "1684641991/at6NN8YOvk1ZJqICJLGMvx02h0YpZNnqK2QTVyVU.webp",
                "artist_id" => 1,
            ],
            [
                "product_name" => "Megabat",
                "category_id" => 1,
                "description" => "Megabat",
                "price" => 20,
                "image_alt" => "Megabat Vinyl",
                "image_1" => "1684642082/wJtzGNDeqnKQ0vFPHXtsKbEQff52dQ3kBvqB3IIR.webp",
                "image_2" => "1684642082/eJbwGECUTlyhm9ZcGjtuo1mYgFi7vBBi8nYo3QTJ.webp",
                "artist_id" => 1,
            ],
        ]);
    }
}
