<?php

namespace App\Service;

class MessageGenerator
{
    public function getHappyMessage(): string
    {
        $messages = [
            'Log User - ***Mensaje de servicio***',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }
}
