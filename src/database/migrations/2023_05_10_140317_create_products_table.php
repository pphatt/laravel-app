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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements("product_id");
            $table->string("product_name", 100);
            $table->unsignedBigInteger("category_id");
            $table->string("description", 256);
            $table->string("image_alt", 256);
            $table->mediumText("image_1")->nullable();
            $table->mediumText("image_2")->nullable();
            $table->unsignedBigInteger("artist_id");
        });

        Schema::table("products", function (Blueprint $table) {
            $table->foreign("category_id")
                ->references("category_id")
                ->on("categories")->cascadeOnDelete()->restrictOnDelete();

            $table->foreign("artist_id")
                ->references("artist_id")
                ->on("artists")->cascadeOnDelete()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
