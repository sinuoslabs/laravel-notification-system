<?php

namespace App\Jobs\Outbound;

use App\Http\Requests\Outbound\EmailRequest;
use App\Models\User;
use App\Notifications\EmailNotification;
use App\Services\Contracts\NotificationInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessEmailNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public int $tries = 5;

    /**
     * The maximum number of unhandled exceptions to allow before failing.
     *
     * @var int
     */
    public $maxExceptions = 3;

    /**
     * Delete the job if its models no longer exist.
     *
     * @var bool
     */
    public $deleteWhenMissingModels = true;

    protected User $user;

    protected EmailRequest $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, EmailRequest $request)
    {
        $this->onQueue('email');
        $this->onConnection('redis');

        $this->user = $user;
        $this->data = $request;
    }

    /**
     * Calculate the number of seconds to wait before retrying the job.
     *
     * @return array
     */
    public function backoff()
    {
        return [2, 5, 10];
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

    /**
     * Handle a job failure.
     *
     * @param  \Throwable  $exception
     * @return void
     */
    public function failed(Throwable $exception)
    {
        // Send user notification of failure, etc...
    }
}
