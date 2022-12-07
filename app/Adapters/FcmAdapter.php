<?php

namespace App\Adapters;

use App\Adapters\Concerns\FcmMessageTrait;

class FcmAdapter
{
    use FcmMessageTrait;

    public function toFCM(): mixed
    {
        //
    }
}
