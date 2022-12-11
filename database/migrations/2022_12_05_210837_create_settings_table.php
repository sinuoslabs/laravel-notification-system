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
            $table->uuid('user_id')->index();
            $table->enum('channel', [
                'email',
                'sms',
                'push',
                'in_app',
                'webhook',
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
