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
        Schema::create('product_variant', function (Blueprint $table) {
            $table->unsignedBigInteger("variant_option_id");
            $table->unsignedBigInteger("product_item_id");
        });

        Schema::table('product_variant', function (Blueprint $table) {
            $table->foreign("variant_option_id")
                ->references("variant_option_id")
                ->on("variant_option")->cascadeOnDelete()->restrictOnDelete();

            $table->foreign("product_item_id")
                ->references("product_item_id")
                ->on("product_item")->cascadeOnDelete()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variant');
    }
};
