<?php

namespace App\Service;
use Illuminate\Support\Facades\Http;


class Telegram{
    
    static public function SendMessage(string $text):string
    {
        $key = config('services.telegram.key');
        $user = config('services.telegram.user');
        $api =  Http::get('https://api.telegram.org/bot' . $key . "/sendMessage?chat_id={$user}&text={$text}&parse_mode=markdown");
        return $api;
    }

}