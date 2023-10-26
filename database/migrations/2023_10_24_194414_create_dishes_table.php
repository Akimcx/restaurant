<?php

use App\Models\Category;
use App\Models\Dish;
use App\Models\Restaurant;
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
            $table->string('dishes_name')->nullable(false);
            $table->integer('dishes_price')->nullable(false);
            $table->string('dishes_img')->nullable(false);
            $table->string('dishes_description')->nullable(false);
            $table->timestamps();
        });
        Schema::table('restaurants', function (Blueprint $table) {
            $table->foreignIdFor(Dish::class)->constrained()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropForeignIdFor(Category::class);
        });
    }
};
