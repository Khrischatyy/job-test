<?php

namespace App\Http\Services\NotificationTypeStrategies;

use App\Http\Interfaces\NotificationStrategy;

class EmailNotification implements NotificationStrategy
{
    public function send($user, $settings)
    {
        // логика отправки Email
        // ...

        return 'send confirmation code through SMS';
    }
}
