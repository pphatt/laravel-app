<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("product_images")->insert([
            [
                "product_item_id" => 1,
                "product_image" => "https://cdn.sanity.io/images/ieasd5lg/production/44465ea927eb678f562b5f2d938a81c7d054cbb4-2400x1800.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format"
            ],
            [
                "product_item_id" => 1,
                "product_image" => "https://cdn.sanity.io/images/ieasd5lg/production/9fcd6d25c0f0cb7851f47fb62426e03e317ccbbd-2400x1800.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format"
            ],
            [
                "product_item_id" => 2,
                "product_image" => "https://cdn.sanity.io/images/ieasd5lg/production/6f7afac34661661fd162cb89f8b01f3534fa9f3b-2049x2016.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format"
            ],
            [
                "product_item_id" => 2,
                "product_image" => "https://cdn.sanity.io/images/ieasd5lg/production/a2e872eb3708f987cb0ec98d9fead7a09a42a7c4-2049x2016.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format"
            ],
            [
                "product_item_id" => 3,
                "product_image" => "https://cdn.sanity.io/images/ieasd5lg/production/8f2d37e1a2e1fa6d5eea191b77432c6c6cdd0adf-2400x1800.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format"
            ]
        ]);
    }
}
