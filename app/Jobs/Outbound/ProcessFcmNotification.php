<?php

namespace App\Jobs\Outbound;

use App\Adapters\FcmAdapter;
use App\Notifications\PushNotification;
use App\Services\NotificationService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessFcmNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return mixed
     */
    public function handle(): mixed
    {
        $notification = new PushNotification((new FcmAdapter(config('services.fcm')))
                ->setToken('123456')
                ->setTitle('Hello')
                ->setBody('Hello')
        );

        return NotificationService::send($notification);
    }
}
