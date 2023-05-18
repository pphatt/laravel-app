<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
            ->orderBy("id")
            ->get();

        return view("admin.manage-product", ["products" => $products]);
    }

    public function productDetails($id)
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

    public function addProduct()
    {
        return view("admin.add-product");
    }

    public function handleAddProduct(Request $request)
    {
//        if (count($request->get("name")) > 100) {
//            return back()->withErrors("Product's Name must be less than 100 characters");
//        }

//        $test = "1a2a";

//        dd([$request, preg_match('/^[0-9]+$/', "123a")]);

        $image_1 = "";
        $image_2 = "";
        $image_path = "";

        if ($request->hasFile('image_1')) {
            $image_1 = $request->file('image_1');
            $image_path = time();

            Storage::disk('local')->put('public/images/' . $image_path, $image_1, 'public');
        }

        if ($request->hasFile('image_2')) {
            $image_2 = $request->file('image_2');

            Storage::disk('local')->put('public/images/' . $image_path, $image_2, 'public');
        }

        $id = DB::table("products")->get();

        DB::table("products")->insert([
            "product_name" => $request->get("name"),
            "category_id" => ($request->get("category") == "Vinyls") ? "1" : "2",
            "description" => $request->get("description"),
            "price" => $request->get("price"),
            "image_1" => $image_path . "/" . $image_1->hashName(),
            "image_2" => $image_path . "/" . $image_2->hashName(),
        ]);

        DB::table("product_items")->insert([
            "product_id" => $id->count() + 1,
            "quantity" => $request->get("quantity"),
        ]);

        return view("admin.add-product")->with("success", "Add product successfully");
    }
}
