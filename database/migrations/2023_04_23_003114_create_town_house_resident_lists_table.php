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
        Schema::create('town_house_resident_lists', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('townHouseNumber');
            $table->string('roomNumber');
            $table->string('occupied');
            $table->string('residentName');
            $table->string('emailId')->unique();
            $table->date('leaseStartDate');
            $table->date('leaseEndDate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('town_house_resident_lists');
    }
};
