<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventory_locations', function (Blueprint $table): void {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('inventory_products', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('sku')->unique();
            $table->unsignedInteger('reorder_point')->default(0);
            $table->timestamps();
        });

        Schema::create('inventory_stock_levels', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('product_id')->unique()->constrained('inventory_products')->cascadeOnDelete();
            $table->unsignedInteger('quantity')->default(0);
            $table->timestamps();
        });

        Schema::create('inventory_lots', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('product_id')->constrained('inventory_products')->cascadeOnDelete();
            $table->foreignId('location_id')->nullable()->constrained('inventory_locations')->nullOnDelete();
            $table->string('lot_number')->index();
            $table->date('expires_at');
            $table->unsignedInteger('quantity');
            $table->timestamps();
            $table->unique(['product_id', 'lot_number']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_lots');
        Schema::dropIfExists('inventory_stock_levels');
        Schema::dropIfExists('inventory_products');
        Schema::dropIfExists('inventory_locations');
    }
};
