<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EditProductController extends Controller
{
    public function view($id)
    {
        $product = DB::table("products")
            ->select("products.product_name as name", "categories.category_name as category", "product_items.quantity as quantity",
                "products.price as price", "products.description as description", "products.image_1 as image_1", "products.image_2 as image_2")
            ->join("product_items", "product_items.product_id", "=", "products.product_id")
            ->join("categories", "categories.category_id", "=", "products.category_id")
            ->where("products.product_id", '=', $id)
            ->get();

        return view("admin.edit-product", ["product" => $product, "id" => $id]);
    }

    public function handle(Request $request, $id)
    {
        $image_1 = "";
        $image_2 = "";
        $image_path = "";
//        dd([$request, $request->hasFile('image_1'), $request->hasFile('image_2')]);

        if ($request->hasFile('image_1')) {
            $image_1 = $request->file('image_1');
            $image_path = time();

            Storage::disk('local')->put('public/images/' . $image_path, $image_1, 'public');
        }

        if ($request->hasFile('image_2')) {
            $image_2 = $request->file('image_2');

            Storage::disk('local')->put('public/images/' . $image_path, $image_2, 'public');
        }

        DB::table("products")
            ->where('product_id', $id)
            ->limit(1)
            ->update([
                "product_name" => $request->get('name'),
                "price" => $request->get('price'),
                "description" => $request->get('description'),
                "image_1" => $request->hasFile('image_1') ? $image_path . "/" . $image_1->hashName() : $request->get("old_image_1"),
                "image_2" => $request->hasFile('image_2') ? $image_path . "/" . $image_2->hashName() : $request->get("old_image_2"),
            ]);

        DB::table("product_items")
            ->where('product_id', $id)
            ->limit(1)
            ->update([
                "quantity" => $request->get('quantity'),
            ]);

        $products = DB::table("products")
            ->select("products.product_id as id", "products.product_name as name",
                "categories.category_name as category", "products.description as description", "products.price as price")
            ->join("categories", "categories.category_id", "=", "products.category_id")
            ->orderBy("id")
            ->get();

        return view("admin.manage-product", ["products" => $products])->with("success", "Edit product successfully");
    }
}
