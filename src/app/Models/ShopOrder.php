<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopOrder extends Model
{
    use HasFactory;

    protected $primaryKey = "shop_order_id";

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function payment_method()
    {
        return $this->hasOne(PaymentMethod::class);
    }

    public function shipping_method()
    {
        return $this->hasOne(ShippingMethod::class);
    }

    public function order_status()
    {
        return $this->hasOne(OrderStatus::class);
    }
}
