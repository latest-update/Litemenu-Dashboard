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
        Schema::create('elements', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->uuid('dish_uuid');
            $table->uuid('event_uuid');
            $table->timestamps();

            $table->foreign('dish_uuid')->references('uuid')->on('dishes')->onDelete('cascade');
            $table->foreign('event_uuid')->references('uuid')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elements');
    }
};
