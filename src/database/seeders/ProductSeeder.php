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
                "image_1" => "https://cdn.sanity.io/images/ieasd5lg/production/44465ea927eb678f562b5f2d938a81c7d054cbb4-2400x1800.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
                "image_2" => "https://cdn.sanity.io/images/ieasd5lg/production/9fcd6d25c0f0cb7851f47fb62426e03e317ccbbd-2400x1800.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
                "artist_id" => 1,
            ],
            [
                "product_name" => "Ultra Magic",
                "category_id" => 1,
                "description" => "Ultra Magic",
                "price" => 20,
                "image_alt" => "Ultra Magic",
                "image_1" => "https://cdn.sanity.io/images/ieasd5lg/production/6f7afac34661661fd162cb89f8b01f3534fa9f3b-2049x2016.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
                "image_2" => "https://cdn.sanity.io/images/ieasd5lg/production/a2e872eb3708f987cb0ec98d9fead7a09a42a7c4-2049x2016.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
                "artist_id" => 1,
            ],
            [
                "product_name" => "Megabat Tee",
                "category_id" => 2,
                "description" => "Megabat Tee",
                "price" => 20,
                "image_alt" => "Megabat Tee",
                "image_1" => "https://cdn.sanity.io/images/ieasd5lg/production/8f2d37e1a2e1fa6d5eea191b77432c6c6cdd0adf-2400x1800.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format",
                "image_2" => null,
                "artist_id" => 1,
            ],
            [
                "product_name" => "=",
                "category_id" => 1,
                "description" => "= vinyls - ed sheeran",
                "price" => 20,
                "image_alt" => "= vinyls - ed sheeran",
                "image_1" => "https://m.media-amazon.com/images/I/61Y3wcDYo-L.jpg",
                "image_2" => null,
                "artist_id" => 1
            ],
            [
                "product_name" => "-",
                "category_id" => 1,
                "description" => "- vinyls - ed sheeran",
                "price" => 20,
                "image_alt" => "- vinyls - ed sheeran",
                "image_1" => "https://m.media-amazon.com/images/I/91OhLzGyWEL._SL1500_.jpg",
                "image_2" => null,
                "artist_id" => 1
            ],
            [
                "product_name" => "%",
                "category_id" => 1,
                "description" => "% vinyls - ed sheeran",
                "price" => 20,
                "image_alt" => "% vinyls - ed sheeran",
                "image_1" => "https://m.media-amazon.com/images/I/B1HYJn9MrPS._SX425_.jpg",
                "image_2" => null,
                "artist_id" => 1
            ],
            [
                "product_name" => "X",
                "category_id" => 1,
                "description" => "X vinyls - ed sheeran",
                "price" => 20,
                "image_alt" => "X vinyls - ed sheeran",
                "image_1" => "https://m.media-amazon.com/images/I/711Qha+w8GL._SL1425_.jpg",
                "image_2" => null,
                "artist_id" => 1
            ]
        ]);
    }
}
