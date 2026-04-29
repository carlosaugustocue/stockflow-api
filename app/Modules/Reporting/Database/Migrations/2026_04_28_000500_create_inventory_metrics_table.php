<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventory_metrics', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('product_id')->unique()->constrained('inventory_products')->cascadeOnDelete();
            $table->string('sku');
            $table->string('product_name');
            $table->unsignedInteger('current_stock');
            $table->unsignedInteger('reorder_point');
            $table->integer('stock_gap');
            $table->timestamp('updated_from_event_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_metrics');
    }
};
