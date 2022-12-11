<?php

declare(strict_types=1);

return [
    'url' => env('FCM_URL', 'https://fcm.googleapis.com/fcm/send'),

    'token' => env('FCM_TOKEN', ''),
];
