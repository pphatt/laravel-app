<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AddProductController extends Controller
{
    public function view()
    {
        return view("admin.add-product");
    }

    public function handle(Request $request)
    {
        $request->validate([
            "name" => "required|max:100",
            "category" => "required",
            "price" => "required|numeric",
            "quantity" => "required|numeric",
            "description" => "required|max:256",
            "image_1" => "required",
            "image_2" => "required",
        ], [
            "name.required" => "Product name is required",
            "name.max:100" => "Product name character must less than 100 characters",
            "category.required" => "Product category is required",
            "price.required" => "Product price is required",
            "price.numeric" => "Product price must be digits",
            "quantity.required" => "Product quantity is required",
            "quantity.numeric" => "Product quantity must be digits",
            "description.required" => "Product description is required",
            "description.max:256" => "Product description must less than 256 characters",
            "image_1.required" => "Product Image 1 is required",
            "image_2.required" => "Product Image 2 is required"
        ]);

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
