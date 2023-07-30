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
        Schema::create('genders', function (Blueprint $table) {
            $table->id();
            $table->string("gender");
            
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("category");
            
        });
        Schema::create('favorite_products', function (Blueprint $table) {
            $table->integer("user_id");
            $table->integer("product_id");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
