<?php

require dirname(__FILE__).'/config.php';

$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN);

$client->createText(FROM_PHONE, TO_PHONE, 'text message')
    ->setStatusCallback(BASE_URL.'/callback.php')
    ->send();
