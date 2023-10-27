<?php

namespace App\Http\Controllers;

use App\Http\Services\ConfirmationService;
use App\Http\Services\NotificationStrategyFactory;
use App\Http\Services\NotificationTypeStrategies\TelegramNotification;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    protected $notificationStrategyFactory;

    public function __construct(NotificationStrategyFactory $notificationStrategyFactory)
    {
        $this->notificationStrategyFactory = $notificationStrategyFactory;
    }

    public function updateNotificationSource(Request $request)
    {
        //Проверка параметра который приходит с фронта, тут еще должен быть user, которому меняем настройку как минимум
        //Пускаем только sms, telegram, email (возьмем telegram)
        $validated = $request->validate([
            'notification_method' => 'required|string|in:email,sms,telegram',
        ]);

        //Паттерн фабрика здесь можно использовать для того
        //чтобы определить необходую Стратегию, в зависимости от notification_method
        //который получен из реквеста
        $notificationStrategy = $this->notificationStrategyFactory->make($validated['notification_method']);

        //Здесь пригодится паттерн Stragegy, в зависимости от notification_method (у нас telegram)
        //Внедряем зависимость TelegramNotification::class в сервис контейнер
        $confirmationService = app()->make(ConfirmationService::class, ['notificationStrategy' => $notificationStrategy]);
    }
}

