<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('receiving_receipts', function (Blueprint $table): void {
            $table->id();
            $table->string('supplier_reference');
            $table->timestamp('received_at');
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('receiving_receipt_lot_links', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('receipt_id')->constrained('receiving_receipts')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('inventory_products')->cascadeOnDelete();
            $table->string('lot_number');
            $table->date('expires_at');
            $table->unsignedInteger('quantity');
            $table->foreignId('location_id')->nullable()->constrained('inventory_locations')->nullOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('receiving_receipt_lot_links');
        Schema::dropIfExists('receiving_receipts');
    }
};
