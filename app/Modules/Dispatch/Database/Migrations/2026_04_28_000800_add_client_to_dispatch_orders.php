<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('dispatch_orders', function (Blueprint $table): void {
            $table->string('client_name')->nullable()->after('order_reference');
        });
    }

    public function down(): void
    {
        Schema::table('dispatch_orders', function (Blueprint $table): void {
            $table->dropColumn('client_name');
        });
    }
};
