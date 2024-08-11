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
        Schema::create('zakazs', function (Blueprint $table) {
            $table->id();
            $table->string('name_project');
            $table->string('topic_project');
            $table->text('descripthion_project');
            $table->string('url_project');
            $table->integer('price_project');
            $table->integer('platform_procent');
            $table->integer('user_procent');
            $table->integer('status');
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zakazs');
    }
};
