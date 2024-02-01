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
        Schema::create('pool_staff_lists', function (Blueprint $table) {
            // $table->id(false);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('workerType');
            $table->string('poolName');
            $table->string('schedule');
            // $table->timestamps(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pool_staff_lists');
    }
};
