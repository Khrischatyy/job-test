<?php

namespace App\Http\Services\NotificationTypeStrategies;

use App\Http\Interfaces\NotificationStrategy;

class TelegramNotification implements NotificationStrategy
{
    public function send($user, $settings)
    {
        // логика отправки сообщения в Телегу
        // ...

        return "send confirmation code through Telegram";
    }
}
