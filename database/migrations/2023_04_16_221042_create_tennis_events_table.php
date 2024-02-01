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
        Schema::create('tennis_events', function (Blueprint $table) {
            // $table->id();
            $table->string('tennisEvents');
            $table->string('eventId')->unique();
            $table->date('matchDate');
            $table->time('time');
            $table->string('status');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tennis_events');
    }
};
