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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("product_item_id");
            $table->unsignedInteger("quantity");
            $table->mediumText("price");
        });

        Schema::table("cart_items", function (Blueprint $table) {
            $table->primary(["user_id", "product_item_id"]);
            $table->foreign("user_id")
                ->references("id")
                ->on("users")->cascadeOnDelete()->restrictOnDelete();

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
        Schema::dropIfExists('cart_items');
    }
};
