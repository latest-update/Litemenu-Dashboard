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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_category_id');
            $table->uuid('branch_uuid');
            $table->string('name');
            $table->string('description')->nullable();
            $table->json('image')->nullable();

            $table->foreign('branch_uuid')->references('uuid')->on('branches');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
