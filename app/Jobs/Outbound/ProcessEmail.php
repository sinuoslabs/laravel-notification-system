<?php

namespace App\Jobs\Outbound;

use App\Http\Requests\Outbound\EmailRequest;
use App\Models\User;
use App\Services\Contracts\NotificationInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected User $user;
    protected EmailRequest $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, EmailRequest $request)
    {
        $this->user = $user;
        $this->data = $request;
    }

    /**
     * Execute the job.
     *
     * @param NotificationInterface $notification
     * @return void
     */
    public function handle(NotificationInterface $notification): void
    {
        //
    }
}
