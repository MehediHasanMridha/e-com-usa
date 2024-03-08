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
            $table->string('title');
            $table->json('image');
            $table->text('short_description');
            $table->text('description');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('brand_id')->unsigned();
            $table->string('type');
            $table->decimal('price', 10, 2);
            $table->decimal('discount', 4, 2);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
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
