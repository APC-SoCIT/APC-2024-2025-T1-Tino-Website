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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('session_id'); // Unique identifier for each visitor's session
            $table->unsignedBigInteger('product_id');
            $table->decimal('size', 3, 1); // Decimal size column with 3 total digits and 1 decimal place
            $table->integer('quantity')->default(1); // Quantity of the product
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};