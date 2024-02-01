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
        Schema::create('cabin_resident_lists', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('cabinNumber');
            $table->string('roomNumber');
            $table->string('occupied');
            $table->string('residentName');
            $table->string('emailId')->unique();;
            $table->date('leaseStartDate');
            $table->date('leaseEndDate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabin_resident_lists');
    }
};
