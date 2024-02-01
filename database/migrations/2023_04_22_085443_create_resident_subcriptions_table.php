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
        Schema::create('resident_subcriptions', function (Blueprint $table) {
            // $table->id();
            $table->string('name');
            $table->string('emailId');
            $table->string('poolSubcription')->default('UnSubscribe');
            $table->string('gardenSubcription')->default('UnSubscribe');
            $table->string('tennisSubcription')->default('UnSubscribe');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resident_subcriptions');
    }
};
