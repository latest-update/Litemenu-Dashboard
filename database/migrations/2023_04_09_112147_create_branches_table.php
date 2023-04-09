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
        Schema::create('branches', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('name');
            $table->string('address');
            $table->uuid('admin_uuid')->nullable();
            $table->uuid('company_uuid')->nullable();
            $table->timestamps();

            $table->foreign('admin_uuid')->references('uuid')->on('users');
            $table->foreign('company_uuid')->references('uuid')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
