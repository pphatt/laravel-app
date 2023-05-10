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
        Schema::create('product_image', function (Blueprint $table) {
            $table->unsignedBigInteger("product_item_id");
            $table->string("product_image_link", 256);
        });

        Schema::table('product_image', function (Blueprint $table) {
            $table->primary("product_item_id");
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
        Schema::dropIfExists('product_image');
    }
};
