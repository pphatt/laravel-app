<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shop_order_details', function (Blueprint $table) {
            $table->unsignedBigInteger("shop_order_id");
            $table->unsignedBigInteger("product_item_id");
            $table->unsignedInteger("quantity");
            $table->mediumText("price");
        });

        Schema::table('shop_order_details', function (Blueprint $table) {
            $table->foreign("shop_order_id")
                ->references("shop_order_id")
                ->on("shop_orders")->cascadeOnDelete()->restrictOnDelete();

            $table->foreign("product_item_id")
                ->references("product_item_id")
                ->on("product_items")->cascadeOnDelete()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_order_details');
    }
};
