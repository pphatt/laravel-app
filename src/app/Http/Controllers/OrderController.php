<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function view()
    {
        $orders = DB::table("shop_orders")
            ->select("shop_orders.shop_order_id as id", "users.address as address", "users.phone_number as phone", "shop_orders.order_total as total", "shop_orders.order_date as order_date",
                "shop_orders.received_date as received_date", "payment_methods.payment_method_name as payment_method",
                "shipping_methods.shipping_method_name as shipping_method", "order_statuses.order_status_name as order_status")
            ->join("users", "users.id", "=", "shop_orders.user_id")
            ->join("payment_methods", "payment_methods.payment_method_id", "=", "shop_orders.payment_method_id")
            ->join("shipping_methods", "shipping_methods.shipping_method_id", "=", "shop_orders.shipping_method_id")
            ->join("order_statuses", "order_statuses.order_status_id", "=", "shop_orders.order_status_id")
            ->where("shop_orders.user_id", auth()->user()->id)
            ->get();

        return view("user.order", ["orders" => $orders]);
    }
}
