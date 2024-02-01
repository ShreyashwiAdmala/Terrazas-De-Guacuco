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
        Schema::create('resident_profiles', function (Blueprint $table) {
            // $table->id();
            $table->string('name');
            $table->string('emailId');
            $table->string('phnumber')->default('NULL');
            $table->string('dlnumber')->default('NULL');
            $table->string('carnumplate')->default('NULL');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resident_profiles');
    }
};
