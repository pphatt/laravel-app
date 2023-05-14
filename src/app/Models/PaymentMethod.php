<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $primaryKey = "payment_method_id";

    public function shop_order() {
        return $this->belongsTo(ShopOrder::class);
    }
}
