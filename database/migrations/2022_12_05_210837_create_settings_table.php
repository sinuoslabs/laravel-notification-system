<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(\Infrastructure\Persistence\Eloquent\Models\User::class);
            $table->enum('channel', [
                'EMAIL',
                'SMS',
                'PUSH',
                'IN_APP',
                'WEBHOOK',
            ])->index();
            $table->boolean('opt-in')->default(true)->index();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['channel', 'opt-in', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
