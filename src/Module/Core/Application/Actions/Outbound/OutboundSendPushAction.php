<?php

namespace Application\Actions\Outbound;

use Domain\Contracts\ActionInterface;

class OutboundSendPushAction implements ActionInterface
{
    public function execute()
    {
        return response([
            'state' => 'processing',
            'notification_type' => 'alert',
            'user' => [
                'phone' => '+2250778969864',
                'email' => 'ping@lns.io',
                'token' => '1Mr6kBvmCNCku8WRDAsZGDV0d8XZEYDJ',
            ],
            'channels' => [
                'email' => [
                    'type' => 'plain/txt',
                    'subject' => 'Welcome to my world',
                    'body' => 'Bienvenue veuillez valider votre compte',
                ],
                'sms' => [
                    'body' => 'Your code verification is {code}',
                ],
                'push' => [
                    'body' => [
                        'title' => 'Welcome to PNL',
                        'body' => 'Bienvenue veuillez valider votre compte',
                    ],
                ]
            ],
        ], 200);
    }
}
