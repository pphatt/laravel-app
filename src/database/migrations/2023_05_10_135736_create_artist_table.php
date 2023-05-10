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
        Schema::create('artist', function (Blueprint $table) {
            $table->bigIncrements("artist_id");
            $table->string('artist_name', 256);
            $table->string('artist_email', 256);
            $table->integer("artist_age")->nullable();
            $table->mediumText("artist_description")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist');
    }
};
