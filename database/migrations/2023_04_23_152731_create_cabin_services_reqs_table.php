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
        Schema::create('cabin_services_reqs', function (Blueprint $table) {
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
        Schema::dropIfExists('cabin_services_reqs');
    }
};
