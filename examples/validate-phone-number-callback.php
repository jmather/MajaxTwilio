<?php
require dirname(__FILE__).'/config.php';
require dirname(__FILE__).'/../lib/autoload.php';

$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN);

$log = dirname(__FILE__).'/log.txt';

$fh = fopen($log, 'a');

fwrite($fh, var_export($_POST, true));
fwrite($fh, "\r\n\r\n");

$response = $client->parseValidatorResponse();

fwrite($fh, 'Status: '.$response->getVerificationStatus()."\r\n");
fwrite($fh, 'Phone ID: '.$response->getOutgoingCallerIdSid()."\r\n");
fwrite($fh, "\r\n\r\n");
