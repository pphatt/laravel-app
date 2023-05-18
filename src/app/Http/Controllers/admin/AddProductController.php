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
