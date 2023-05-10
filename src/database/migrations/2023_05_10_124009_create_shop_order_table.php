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
        Schema::create('shop_order', function (Blueprint $table) {
            $table->bigIncrements("shop_order_id");
            $table->unsignedBigInteger("user_id");
            $table->dateTime("order_date");
            $table->unsignedBigInteger("payment_method");
            $table->string("shipping_address", 100);
            $table->unsignedBigInteger("shipping_method");
            $table->mediumText("order_total");
            $table->unsignedBigInteger("order_status");
        });

        Schema::table("shop_order", function (Blueprint $table) {
            $table->foreign("user_id")
                ->references("id")
                ->on("users")->cascadeOnDelete()->restrictOnDelete();

            $table->foreign("payment_method")
                ->references("payment_method_id")
                ->on("payment_method")->cascadeOnDelete()->restrictOnDelete();

            $table->foreign("shipping_method")
                ->references("shipping_method_id")
                ->on("shipping_method")->cascadeOnDelete()->restrictOnDelete();

            $table->foreign("order_status")
                ->references("order_status_id")
                ->on("order_status")->cascadeOnDelete()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_order');
    }
};
