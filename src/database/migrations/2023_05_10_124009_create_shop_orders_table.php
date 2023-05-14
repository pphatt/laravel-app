<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shop_orders', function (Blueprint $table) {
            $table->bigIncrements("shop_order_id");
            $table->unsignedBigInteger("user_id");
            $table->dateTime("order_date");
            $table->unsignedBigInteger("payment_method_id");
            $table->string("shipping_address", 100);
            $table->unsignedBigInteger("shipping_method_id");
            $table->mediumText("order_total");
            $table->unsignedBigInteger("order_status_id");
        });

        Schema::table("shop_orders", function (Blueprint $table) {
            $table->foreign("user_id")
                ->references("id")
                ->on("users")->cascadeOnDelete()->restrictOnDelete();

            $table->foreign("payment_method_id")
                ->references("payment_method_id")
                ->on("payment_methods")->cascadeOnDelete()->restrictOnDelete();

            $table->foreign("shipping_method_id")
                ->references("shipping_method_id")
                ->on("shipping_methods")->cascadeOnDelete()->restrictOnDelete();

            $table->foreign("order_status_id")
                ->references("order_status_id")
                ->on("order_statuses")->cascadeOnDelete()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_orders');
    }
};
