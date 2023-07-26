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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Description');
            $table->foreignId('category_id');
            $table->string('stock_availability');
            $table->string('size1');
            $table->string('size2')->nullable();
            $table->string('size3')->nullable();
            $table->string('size4')->nullable();
            $table->string('size5')->nullable();
            $table->string('color1');
            $table->string('color2')->nullable();
            $table->string('color3')->nullable();
            $table->string('color4')->nullable();
            $table->string('Price');
            $table->string('Image1');
            $table->string('Image2')->nullable();
            $table->string('Image3')->nullable();
            $table->timestamps();
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
