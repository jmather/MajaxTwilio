<?php

require dirname(__FILE__).'/config.php';

$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN);

$validator = $client->createPhoneNumberValidator(TO_PHONE);

echo 'Calling now!'."\r\n";
$response = $validator->setStatusCallback(BASE_URL.'/validate-phone-number-callback.php')->validate()."\r\n";
