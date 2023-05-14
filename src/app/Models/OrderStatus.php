<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    protected $primaryKey = "order_status_id";

    public function shop_order() {
        return $this->belongsTo(ShopOrder::class);
    }
}
