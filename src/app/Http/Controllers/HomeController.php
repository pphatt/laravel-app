<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = DB::table("products")
            ->distinct()
            ->select("product_items.product_id as id", "products.product_name as name", "products.image_alt as image_alt",
                "products.image_1 as default_image", "products.image_2 as hover_image",
                "promotions.promotion_discount_rate as discount", "products.price as price")
            ->join("product_items", "products.product_id", "=", "product_items.product_id")
            ->leftJoin("promotions", function ($query) {
                $query->join("promotion_categories", "promotions.promotion_id", "promotion_categories.promotion_id")
                    ->on("promotion_categories.category_id", "products.category_id")
                    ->on("promotions.promotion_id", "promotion_categories.promotion_id");
            })
            ->get();

//        $cart = "";
//
//        if (auth()->user()->id) {
//            $cart = DB::table("cart_items")
//                ->count("cart_items.")
//                ->where("cart_items.user_id", "=", auth()->user()->id)
//                ->get();
//        }

        return view("index", ["products" => $products]);
    }
}
