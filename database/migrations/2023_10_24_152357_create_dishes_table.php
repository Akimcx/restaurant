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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id('dishes_id');
            $table->string('dishes_title')->nullable(false);
            $table->integer('dishes_price')->nullable(false);
            $table->string('dishes_img')->nullable(false);
            $table->integer('restaurent_id')->nullable(false);
            $table->string('dishes_slogan')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
