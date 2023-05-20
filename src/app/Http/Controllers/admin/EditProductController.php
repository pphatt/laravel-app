<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
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
        $request->validate([
            "product_name" => "required|max:100",
            "price" => "required|numeric",
            "quantity" => "required|numeric",
            "description" => "required|max:256",
        ], [
            "name.required" => "Product name is required",
            "name.max:100" => "Product name character must less than 100 characters",
            "price.required" => "Product price is required",
            "price.numeric" => "Product price must be digits",
            "quantity.required" => "Product quantity is required",
            "quantity.numeric" => "Product quantity must be digits",
            "description.required" => "Product description is required",
            "description.max:256" => "Product description must less than 256 characters",
        ]);

        $param = ["product_name", "price", "quantity", "description"];
        $change = [];

        $request_query = $request->request;

        for ($i = 0; $i < count($param); $i++) {
            $value = $param[$i];

            if ($request_query->get($value) != $request_query->get("old_" . $value)) {
                $change[$value] = $request_query->get($value);
            }
        }

        if ($request->hasFile('image_1')) {
            $image = $request->file('image_1');
            $image_path = time();

            Storage::disk('local')->put('public/images/' . $image_path, $image, 'public');
            $change["image_1"] = $image_path . "/" . $image->hashName();
        }

        if ($request->hasFile('image_2')) {
            $image = $request->file('image_2');
            $image_path = time();

            Storage::disk('local')->put('public/images/' . $image_path, $image, 'public');
            $change["image_2"] = $image_path . "/" . $image->hashName();
        }

        if ($change) {
            DB::table("products")
                ->where('product_id', $id)
                ->limit(1)
                ->update($change);

            DB::table("product_items")
                ->where('product_id', $id)
                ->limit(1)
                ->update([
                    "quantity" => $request->get('quantity'),
                ]);

            return redirect()->route("admin.manage_product")->with("edit", "Edit product successfully");
        } else {
            return back()->withErrors("No edit was requested");
        }

    }
}
