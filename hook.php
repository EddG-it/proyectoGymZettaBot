<?php

require __DIR__ . '/vendor/autoload.php';

$bot_api_key = '7663270134:AAFgp7_TrVm6qNtDcPQn9guq3xDsYWIUYTo';
$bot_username = '@gymZettaNewBot';

try{

    $telegram = new \Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    $telegram->handle();
}catch(\Longman\TelegramBot\Exception\TelegramException $e){

    #log telegram errors
    #echo $e->getMessage();
}


?>