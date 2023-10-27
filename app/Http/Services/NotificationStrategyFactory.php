<?php

namespace App\Http\Services;

use App\Http\Interfaces\NotificationStrategy;
use App\Http\Services\NotificationTypeStrategies\EmailNotification;
use App\Http\Services\NotificationTypeStrategies\SmsNotification;
use App\Http\Services\NotificationTypeStrategies\TelegramNotification;

class NotificationStrategyFactory
{
    public static function make($method): NotificationStrategy
    {
        return match ($method) {
            'sms' => app(SmsNotification::class),
            'email' => app(EmailNotification::class),
            'telegram' => app(TelegramNotification::class),
            default => throw new \Exception("Unknown notification method: $method"),
        };
    }
}
