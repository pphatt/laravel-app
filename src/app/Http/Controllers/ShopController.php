<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function view()
    {
        $products = DB::table("products")
            ->distinct()
            ->select("product_items.product_id as id", "products.product_name as name", "products.image_alt as image_alt", "products.price as price as price",
                "promotions.promotion_discount_rate as discount",
                "products.image_1 as default_image", "products.image_2 as hover_image")
            ->join("product_items", "product_items.product_id", "=", "products.product_id")
            ->leftJoin("promotion_categories", function ($query) {
                $query->join("promotions", "promotions.promotion_id", "=", "promotion_categories.promotion_id")
                    ->on("promotion_categories.category_id", "products.category_id");
            })
            ->where("products.state", "=", "0")
            ->get();

        return view('shop', ["products" => $products]);
    }
}
