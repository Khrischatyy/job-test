<?php

namespace App\Http\Interfaces;

interface NotificationStrategy
{
    public function send($user, $settings);
}
