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
            $table->string('product_title')->index();              // Required, indexed for better search performance
            $table->string('images')->nullable();               // Optional, so nullable is kept
            $table->longText('description')->nullable();           // Optional, nullable is kept
            $table->decimal('price', 10, 2);                       // Required, as most products will have a price
            $table->enum('product_type', ['SHOES', 'JACKET', 'LOUNGEWEAR']); // Required, non-nullable since each product must have a type
            $table->timestamps();                                  // Non-nullable, created_at and updated_at are always present
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
