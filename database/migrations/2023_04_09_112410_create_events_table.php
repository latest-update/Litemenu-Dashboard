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
        Schema::create('events', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('title');
            $table->text('description')->nullable();
            $table->uuid('places_uuid')->nullable();
            $table->json('image')->nullable();
            $table->timestamps();

            $table->foreign('places_uuid')->references('uuid')->on('places')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
