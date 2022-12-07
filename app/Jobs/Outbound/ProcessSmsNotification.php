<?php

namespace App\Jobs\Outbound;

use App\Adapters\TwilioAdapter;
use App\Notifications\SmsNotification;
use App\Services\NotificationService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessSmsNotification implements ShouldQueue
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
        $notification = new SmsNotification((new TwilioAdapter())
            ->setRecipient('4444444444')
            ->setMessage('Welcome to my channel')
        );

        return NotificationService::send($notification);
    }
}
