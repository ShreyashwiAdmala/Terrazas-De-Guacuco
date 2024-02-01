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
        Schema::create('handle_requests', function (Blueprint $table) {
            // $table->id();
            $table->string('name');
            $table->string('emailId');
            $table->string('incidentType');
            $table->string('phnumber');
            $table->string('query');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('handle_requests');
    }
};
