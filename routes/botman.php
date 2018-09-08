<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});

$botman->hears("chao",function($bot){

 $bot->reply("xxx");
});


$botman->hears('Start conversation', BotManController::class.'@startConversation');
