<?php

use App\Models\Dish;
use App\Models\Order;
use App\Models\User;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id("order_id");
            $table->string("name");
            $table->integer("quantity");
            $table->integer("price");
            $table->string("status");
            $table->timestamps();
        });
        Schema::table("users", function (Blueprint $table) {
            $table->foreignIdFor(Order::class)->nullable()->constrained()->cascadeOnDelete();
        });
        Schema::create("dish_order", function (Blueprint $table) {
            $table->foreignIdFor(Dish::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Order::class)->constrained()->cascadeOnDelete();
            $table->primary(["dish_id", "order_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dish_order');
        Schema::dropIfExists('orders');
        Schema::table("users", function (Blueprint $table) {
            $table->dropForeignIdFor(User::class);
        });
    }
};
