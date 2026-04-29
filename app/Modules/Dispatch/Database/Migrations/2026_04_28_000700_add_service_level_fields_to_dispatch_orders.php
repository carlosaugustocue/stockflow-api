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
            $table->timestamp('expected_dispatch_at')->nullable()->after('status');
            $table->timestamp('confirmed_at')->nullable()->after('expected_dispatch_at');
        });
    }

    public function down(): void
    {
        Schema::table('dispatch_orders', function (Blueprint $table): void {
            $table->dropColumn(['expected_dispatch_at', 'confirmed_at']);
        });
    }
};
