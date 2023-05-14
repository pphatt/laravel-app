<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ShopOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
//        $shop_orders = DB::table("shop_orders")->where("shipping_address", "JP")->get();
//        $shop_orders = DB::table("shop_orders")->where("shipping_address", "JP")->value("shipping_address");

//        $shop_orders = DB::table("shop_orders")->pluck('user_id');

//        $shop_orders = DB::table("shop_orders")->select(["user_id", "order_total"])->get();
//
//        $query = DB::table("shop_orders")->select("user_id");
//        $user = $query->addSelect("order_total")->get();

//        $shop_orders = DB::table("shop_orders")
//            ->join("payment_methods", "shop_orders.payment_method_id", "=", "payment_methods.payment_method_id")
//            ->join("shipping_methods", "shop_orders.shipping_method_id", "=", "shipping_methods.shipping_method_id")
//            ->select("user_id", "shipping_methods.shipping_method_name", "payment_methods.payment_method_name", "shipping_address")
//            ->where("shipping_address", "JP")
//            ->get();

//        $shop_orders = ShopOrder::query()
//            ->join("payment_methods", "shop_orders.payment_method_id", "=", "payment_methods.payment_method_id")
//            ->select("user_id", "payment_methods.payment_method_name")
//            ->get();

        $products = DB::table("products")
            ->select("products.product_name as name", "products.image_1 as default_image", "products.image_2 as hover_image",
                "promotions.promotion_discount_rate as discount", "product_items.price as price")
            ->join("product_items", "products.product_id", "=", "product_items.product_id")
            ->leftJoin("promotions", function ($query) {
                $query->join("promotion_categories", "promotions.promotion_id", "promotion_categories.promotion_id")
                    ->on("promotion_categories.category_id", "products.category_id")
                    ->on("promotions.promotion_id", "promotion_categories.promotion_id");
            })
            ->get();

        return view("index", ["products" => $products]);
    }
}
