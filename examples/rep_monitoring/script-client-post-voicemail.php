<?php

require dirname(__FILE__) . '/config.php';

$log = dirname(__FILE__).'/log.txt';

$fh = fopen($log, 'a');

fwrite($fh, 'POST VOICEMAIL RESPONSE'."\r\n");
fwrite($fh, var_export($_POST, true));
fwrite($fh, "\r\n\r\n");

$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN, CLIENT_FROM_PHONE);

$response = $client->parseRecordResponse();

$script = new Majax_Twilio_Twiml();

if ($response->getRecordingUrl())
{
    $recording = file_get_contents($response->getRecordingUrl().'.mp3');
    file_put_contents('recording.mp3', $recording);
    $client->deleteRecording($response->getRecordingSid());
}

$script->say("Thanks for calling. Good bye!");

echo $script->toString();
