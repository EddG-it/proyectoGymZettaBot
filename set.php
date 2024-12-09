<?php

use Longman\TelegramBot\Entities\Chat;

require __DIR__ . 'vendor/autoload.php';

$bot_api_key = '7663270134:AAFgp7_TrVm6qNtDcPQn9guq3xDsYWIUYTo';
$bot_username = '@gymZettaNewBot';
$hook_url = '';

try{

    $telegram = new \Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    $result = $telegram->setWebhook($hook_url);

    if ($result->isOk()){
        
        echo $result->getDescription();

    }
}catch(\Longman\TelegramBot\Exception\TelegramException $e){

    #log telegram errors
    echo $e->getMessage();
}


?>