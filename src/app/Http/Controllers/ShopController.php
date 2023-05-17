<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function view()
    {
        $products = DB::table("products")
            ->select("products.product_name as name", "products.price as price as price", "promotions.promotion_discount_rate as discount",
                "products.image_1 as default_image", "products.image_2 as hover_image")
            ->leftJoin("promotion_categories", function ($query) {
                $query->join("promotions", "promotions.promotion_id", "=", "promotion_categories.promotion_id")
                    ->on("promotion_categories.category_id", "products.category_id");
            })
            ->get();

        return view('shop', ["products" => $products]);
    }
}
