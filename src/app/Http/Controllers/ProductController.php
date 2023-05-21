<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function view($id)
    {
        $products = DB::table("products")
            ->select("products.product_id as id", "products.product_name as name",
                "products.image_alt as image_alt", "products.price as price as price", "promotions.promotion_discount_rate as discount",
                "products.image_1 as default_image", "products.image_2 as hover_image")
            ->leftJoin("promotion_categories", function ($query) {
                $query->join("promotions", "promotions.promotion_id", "=", "promotion_categories.promotion_id")
                    ->on("promotion_categories.category_id", "products.category_id");
            })
            ->get();

        $product = DB::table("products")
            ->select("product_items.product_id as id", "products.product_id as product_id",
                "products.product_name as name", "products.category_id", "products.description as description", "products.price as price",
                "products.image_alt as image_alt", "products.image_1 as image_1", "products.image_2 as image_2", "product_items.quantity as quantity")
            ->join("product_items", "products.product_id", "=", "product_items.product_id")
            ->where("product_items.product_item_id", "=", $id)
            ->get();

        $variant = "";
        $product_variant = "";
        $product_variant_option = "";

        if ($product[0]->category_id == "2") {
            $product_variant_option = DB::table("product_variants")
                ->select("product_items.product_item_id as id", "variant_options.variant_option_name as name")
                ->join("product_items", "product_items.product_item_id", "=", "product_variants.product_item_id")
                ->join("variant_options", "variant_options.variant_option_id", "=", "product_variants.variant_option_id")
                ->where("product_variants.product_item_id", "=", $id)
                ->get();

            $product_variant = DB::table("product_items")
                ->select("product_items.product_item_id as id")
                ->join("products", "product_items.product_id", "=", "products.product_id")
                ->where("products.product_id", "=", $product[0]->product_id)
                ->get();
        }

        return view("products", ["product" => $product, "product_variant" => $product_variant, "product_variant_option" => $product_variant_option,
            "products" => $products]);
    }
}
