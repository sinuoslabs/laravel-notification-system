<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->index();
            $table->string('device_token');
            $table->timestamp('last_logged_at')->useCurrent();
            $table->softDeletes();

            $table->index(['user_id', 'device_token']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
