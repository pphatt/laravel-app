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
        Schema::create('product_item', function (Blueprint $table) {
            $table->bigIncrements("product_item_id");
            $table->unsignedBigInteger("product_id");
            $table->unsignedInteger("quantity");
            $table->mediumText("price");
        });

        Schema::table('product_item', function (Blueprint $table) {
           $table->foreign("product_id")
               ->references("product_id")
               ->on("product")->cascadeOnDelete()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_item');
    }
};
