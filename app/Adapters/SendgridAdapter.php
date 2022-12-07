<?php

namespace App\Adapters;

use App\Adapters\Concerns\SendgridMessageTrait;

class SendgridAdapter
{
    use SendgridMessageTrait;

    public function toSendgrid(): void
    {
        //
    }
}
