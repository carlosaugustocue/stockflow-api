<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dispatch_orders', function (Blueprint $table): void {
            $table->id();
            $table->string('order_reference')->unique();
            $table->foreignId('product_id')->constrained('inventory_products')->cascadeOnDelete();
            $table->unsignedInteger('quantity');
            $table->string('status')->default('pending');
            $table->timestamps();
        });

        Schema::create('dispatch_picks', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('dispatch_order_id')->constrained('dispatch_orders')->cascadeOnDelete();
            $table->foreignId('inventory_lot_id')->constrained('inventory_lots')->cascadeOnDelete();
            $table->unsignedInteger('picked_quantity');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dispatch_picks');
        Schema::dropIfExists('dispatch_orders');
    }
};
