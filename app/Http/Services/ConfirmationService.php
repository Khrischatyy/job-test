<?php

namespace App\Http\Services;

use App\Http\Interfaces\NotificationStrategy;

class ConfirmationService
{
    protected $notificationStrategy;

    public function __construct(NotificationStrategy $notificationStrategy)
    {
        $this->notificationStrategy = $notificationStrategy;
    }

    // Другие методы и логика сервиса

    public function generateConfirmationCode(): string
    {
        // Генерация случайного числового кода подтверждения
        return rand(1000, 9999);
    }

    public function storeConfirmationCode(User $user, string $code): void
    {
        // Сохранение кода подтверждения в базе данных или кеше
        // В этом примере предполагается, что у пользователя есть свойство `confirmation_code`
        $user->confirmation_code = $code;
        $user->save();
    }

    public function sendConfirmationCode(User $user, string $code): void
    {
        // Отправка кода подтверждения пользователю
        $this->notificationStrategy->send($user, ['code' => $code]);
    }
}
