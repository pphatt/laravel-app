<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function general()
    {
        return view("admin.general");
    }


    public function account()
    {
        $users = DB::table("users")
            ->select("users.id as id", "users.role as role", "users.email as email", "users.name as name", "users.age as age",
                "users.address as address", "users.phone_number as phone_number", "users.sex as sex", "users.created_at as created_at")
            ->get();

        return view("admin.manage-account", ["users" => $users]);
    }

    public function product()
    {
        $products = DB::table("products")
            ->select("products.product_id as id", "products.product_name as name",
                "categories.category_name as category", "products.description as description", "products.price as price")
            ->join("categories", "categories.category_id", "=", "products.category_id")
            ->get();

        return view("admin.manage-product", ["products" => $products]);
    }

    public function productDetails($id)
    {
        $products = DB::table("products")
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

        return view("admin.[slug-product]", ["products" => $products]);
    }
}
