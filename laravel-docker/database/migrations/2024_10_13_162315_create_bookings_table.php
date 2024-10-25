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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->enum('appointment_type', ['First Meeting', 'Made-To-Order Fittings', 'Consultation']);
            $table->date('date');
            $table->time('time');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country');
            $table->string('phone'); // Unique phone number
            $table->string('email'); // Unique email
            $table->string('preferred_channel')->nullable(); // Changed to string for future flexibility
            $table->integer('number_of_people');
            $table->text('additional_info')->nullable()->limit(500); // Limit length
            $table->enum('status', ['pending', 'confirmed', 'canceled'])->default('pending'); // Status tracking
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
