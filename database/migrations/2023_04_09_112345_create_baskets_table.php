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
        Schema::create('baskets', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->integer('price');
            $table->integer('amount');
            $table->uuid('dish_uuid');
            $table->uuid('order_uuid');
            $table->timestamps();

            $table->foreign('dish_uuid')->references('uuid')->on('dishes')->onDelete('cascade');
            $table->foreign('order_uuid')->references('uuid')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baskets');
    }
};
