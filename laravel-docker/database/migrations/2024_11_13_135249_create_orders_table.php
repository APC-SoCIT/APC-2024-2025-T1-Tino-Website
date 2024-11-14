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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->text('shipping_address');
            $table->string('status')->default('pending'); // pending, confirmed, shipped, delivered, canceled
            $table->string('payment_status')->default('unpaid'); // unpaid, paid, refunded
            $table->decimal('total_amount', 10, 2); // Total order amount
            $table->text('notes')->nullable(); // Optional field for additional information
            $table->unsignedBigInteger('product_id');
            
            // Foreign key constraint for product
            $table->foreign('product_id')
                  ->references('id')->on('products')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
