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
        Schema::create('tennis_staff_lists', function (Blueprint $table) {
            // $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('workerType');
            $table->string('tennisName');
            $table->string('schedule');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tennis_staff_lists');
    }
};
