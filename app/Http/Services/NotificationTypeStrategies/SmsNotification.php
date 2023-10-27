<?php

namespace App\Http\Services\NotificationTypeStrategies;

use App\Http\Interfaces\NotificationStrategy;

class SmsNotification implements NotificationStrategy
{
    public function send($user, $settings)
    {
        // логика отправки SMS
        // ...
    }
}
