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
        Schema::create('variant_option', function (Blueprint $table) {
            $table->bigIncrements("variant_option_id");
            $table->unsignedBigInteger("variant_id");
            $table->string("variant_option_name", 30);
        });

        Schema::table('variant_option', function (Blueprint $table) {
            $table->foreign("variant_id")
                ->references("variant_id")
                ->on("variant")->cascadeOnDelete()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variant_option');
    }
};
