<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new
class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("first_name", 100)->nullable();
            $table->string("last_name", 100)->nullable();
            $table->unsignedSmallInteger("age")->nullable();
            $table->string("address", 100)->default("null");
            $table->string("phone_number", 20)->default("null");
            $table->string("sex", 20)->nullable();
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
