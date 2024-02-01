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
        Schema::create('pool_events', function (Blueprint $table) {
            // $table->id(false);
            $table->string('poolEvents');
            $table->string('eventId')->unique();
            $table->date('matchDate');
            $table->time('time');
            $table->string('status');
            // $table->timestamps(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pool_events');
    }
};


// '18:30:00'
// '1990-04-15'; // Set the date_of_birth column to April 15th, 1990.