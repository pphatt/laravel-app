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
        Schema::create('variants', function (Blueprint $table) {
            $table->bigIncrements("variant_id");
            $table->unsignedBigInteger("category_id");
            $table->string("variant_name", 50);
        });

        Schema::table('variants', function (Blueprint $table) {
            $table->foreign("category_id")
                ->references("category_id")
                ->on("categories")->cascadeOnDelete()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variants');
    }
};
