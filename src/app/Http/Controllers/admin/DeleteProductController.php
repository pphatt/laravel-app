<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;

class DeleteProductController extends Controller
{
    public function handle($id)
    {
        DB::table("products")
            ->where("product_id", "=", $id)
            ->limit(1)
            ->update([
                "state" => "1"
            ]);

        $products = DB::table("products")
            ->select("products.product_id as id", "products.product_name as name",
                "categories.category_name as category", "products.description as description", "products.price as price", "products.state")
            ->join("categories", "categories.category_id", "=", "products.category_id")
            ->orderBy("id")
            ->get();

        return redirect()->route("admin.manage_product")->with("delete", "Delete products successfully");
    }
}
