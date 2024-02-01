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
        Schema::create('visitor_vehicle_regs', function (Blueprint $table) {
            // $table->id();
            $table->string('name');
            $table->string('emailId');
            $table->string('make');
            $table->string('model');
            $table->string('licensePlate')->unique();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_vehicle_regs');
    }
};
