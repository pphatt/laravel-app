<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ManageProductController extends Controller
{
    public function view()
    {
        $products = DB::table("products")
            ->select("products.product_id as id", "products.product_name as name",
                "categories.category_name as category", "products.description as description", "products.price as price", "products.state")
            ->join("categories", "categories.category_id", "=", "products.category_id")
            ->orderBy("id")
            ->get();

        return view("admin.manage-product", ["products" => $products]);
    }

    public function view_details($id)
    {
        $products_description = DB::table("products")
            ->select("products.product_id as id", "products.product_name as name",
                "categories.category_name as category", "products.description as description",
                "products.image_1 as image_1", "products.image_2 as image_2")
            ->join("categories", "categories.category_id", "=", "products.category_id")
            ->where("products.product_id", "=", $id)
            ->get();

        $product_variants = DB::table("products")
            ->select("products.product_id as id", "products.product_name as name",
                "categories.category_name as category", "variant_options.variant_option_name as variant", "products.description as description",
                "products.price as price", "product_items.quantity as quantity", "products.artist_id as artist", "products.image_1 as image")
            ->join("categories", "categories.category_id", "=", "products.category_id")
            ->join("product_items", function ($query) {
                $query->on("product_items.product_id", "products.product_id")
                    ->leftJoin("product_variants", "product_variants.product_item_id", "=", "product_items.product_item_id")
                    ->leftJoin("variant_options", "variant_options.variant_option_id", "=", "product_variants.variant_option_id");
            })
            ->where("products.product_id", "=", $id)
            ->orderBy("id")
            ->get();

        return view("admin.[slug-product]", ["product_description" => $products_description, "product_variants" => $product_variants]);
    }
}
