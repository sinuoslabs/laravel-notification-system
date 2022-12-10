<?php

namespace Tests\Core\Domain;

use Domain\Entities\Notification;
use Domain\Entities\User;
use Domain\ValueObjects\Message;

class Test
{
    public function test()
    {
        $notify = new Notification(
            from: new User(),
            to: new User(),
            message: new Message(
                body: 'jjdjjdjddjjd'
            )
        );
    }
}
