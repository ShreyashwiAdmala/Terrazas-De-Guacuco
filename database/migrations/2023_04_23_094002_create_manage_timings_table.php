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
        Schema::create('manage_timings', function (Blueprint $table) {
            // $table->id();
            $table->string('name');
            $table->string('emailId')->unique();
            $table->string('location');
            $table->string('schedule');
            $table->string('shift');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_timings');
    }
};
