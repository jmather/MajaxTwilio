<?php

require dirname(__FILE__) . '/callback.php';

require dirname(__FILE__) . '/config.php';

$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN, CLIENT_FROM_PHONE);

$response = new Majax_Twilio_Twiml($client);

if (!$client->validateRequest())
{
    $response->say("We were unable to validate this call. Good bye!");
    $response->hangup();
}

$response->say("This call may be recorded for training purposes. Please stay on the line while we connect you to a representative.");

$dial = $response->dial(REPRESENTATIVE_FROM_PHONE, BASE_URL.'/script-client-post-representative.php', null, true);

$dial->number(REPRESENTATIVE_PHONE, BASE_URL.'/script-representative.php');

$response->hangup();

echo $response->toString();
