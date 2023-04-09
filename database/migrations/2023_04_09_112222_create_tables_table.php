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
        Schema::create('tables', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->integer('floor')->nullable();
            $table->string('internal_id')->nullable();
            $table->uuid('temporary_key')->nullable();
            $table->uuid('branch_uuid');
            $table->timestamps();

            $table->foreign('branch_uuid')->references('uuid')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables');
    }
};
