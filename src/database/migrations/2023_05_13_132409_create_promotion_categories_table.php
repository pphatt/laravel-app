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
        Schema::create('promotion_categories', function (Blueprint $table) {
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("promotion_id");
        });

        Schema::table("promotion_categories", function (Blueprint $table) {
            $table->foreign("category_id")
                ->references("category_id")
                ->on("categories");

            $table->foreign("promotion_id")
                ->references("promotion_id")
                ->on("promotions");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_categories');
    }
};
