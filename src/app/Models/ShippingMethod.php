<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    use HasFactory;

    protected $primaryKey = "shipping_method_id";

    public function shop_oder() {
        return $this->belongsTo(ShopOrder::class);
    }
}
