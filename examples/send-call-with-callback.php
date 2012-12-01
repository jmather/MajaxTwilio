<?php

require dirname(__FILE__).'/config.php';

$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN);

$client->createCall(FROM_PHONE, TO_PHONE, BASE_URL.'/call-script.php')
    ->setStatusCallback(BASE_URL.'/callback.php')
    ->send();
