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
        Schema::create('town_house_services_requesteds', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('servicesRequested');
            $table->string('residentName');
            $table->string('emailId')->unique();
            $table->string('apartmentNumber');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('town_house_services_requesteds');
    }
};
