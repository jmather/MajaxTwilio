<?php

require dirname(__FILE__) . '/config.php';

$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN, CLIENT_FROM_PHONE);

$client->createCall(CLIENT_PHONE, BASE_URL.'/script-client-primary.php')
    ->send();
