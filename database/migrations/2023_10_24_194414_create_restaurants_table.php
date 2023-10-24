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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id("restaurant_id");
            $table->string("restaurant_title")->nullable(false);
            $table->string("restaurant_email")->nullable(false);
            $table->string("restaurant_url")->nullable(false);
            $table->string("restaurant_open_hours")->nullable(false);
            $table->string("restaurant_close_hours")->nullable(false);
            $table->string("restaurant_open_days")->nullable(false);
            $table->text("restaurant_address")->nullable(false);
            $table->text("restaurant_image")->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
