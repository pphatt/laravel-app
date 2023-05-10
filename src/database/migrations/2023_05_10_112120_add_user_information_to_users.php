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
        Schema::table('users', function (Blueprint $table) {
            $table->string("first_name", 100);
            $table->string("last_name", 100);
            $table->unsignedSmallInteger("age");
            $table->string("address", 100);
            $table->string("phone_number", 20);
            $table->string("sex", 20);
            $table->tinyInteger("is_admin")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
