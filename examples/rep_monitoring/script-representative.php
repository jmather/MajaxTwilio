<?php

require dirname(__FILE__) . '/config.php';

$log = dirname(__FILE__).'/log.txt';

$fh = fopen($log, 'a');

fwrite($fh, 'REPRESENTATIVE RESPONSE'."\r\n");

fwrite($fh, var_export($_POST, true));
fwrite($fh, "\r\n\r\n");


$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN, CLIENT_FROM_PHONE);

$script = new Majax_Twilio_Twiml();

if (!isset($_GET['answer']))
{
    $script->say('A client is on the line. To accept this call, please press 1');
    $script->gather( BASE_URL.'/script-representative.php?answer=1', 10, 1);
    $script->hangup();
} else
    $script->say("Please wait while we connect the call.");

echo $script->toString();
