<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->index();
            $table->string('notification_type')->index();
            $table->string('channel')->index();
            $table->text('payload');
            $table->enum('status', ['pending', 'processing', 'failed', 'sent']);
            $table->dateTime('processing_at')->nullable();
            $table->dateTime('read_at')->nullable();
            $table->dateTime('delivered_at')->nullable();
            $table->timestamps();

            $table->index(['user_id', 'status', 'notification_type', 'delivered_at', 'processing_at']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
};
