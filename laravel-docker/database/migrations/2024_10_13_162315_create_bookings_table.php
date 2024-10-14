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
            $table->enum('appointment_type', ['FIRST MEETING', 'FITTING', 'CONSULTATION', 'PICK-UP', 'ATELIER VISIT']);
            $table->date('date');
            $table->time('time');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country');
            $table->string('phone');
            $table->string('email');
            $table->enum('preferred_channel', ['WhatsApp', 'Viber']);
            $table->integer('number_of_people');
            $table->text('additional_info')->nullable(); // Nullable if not provided
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
