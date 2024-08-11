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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_price_in');
            $table->integer('user_id_price_exit');
            $table->integer('id_zakaz');
            $table->integer('income');//доход
            $table->integer('expenses');//расход
            $table->integer('platform_procent');
            $table->integer('user_procent');
            $table->text('day');
            $table->text('month');
            $table->text('year');
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
