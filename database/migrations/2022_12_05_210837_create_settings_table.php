<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->enum('channel', [
                'EMAIL',
                'SMS',
                'PUSH',
                'IN_APP',
                'WEBHOOK',
            ])->index();
            $table->boolean('opt-in')->default(true)->index();

            $table->index(['channel', 'opt-in', 'user_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
