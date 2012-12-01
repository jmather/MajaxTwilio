<?php

require dirname(__FILE__) . '/config.php';

$log = dirname(__FILE__).'/log.txt';

$fh = fopen($log, 'a');

fwrite($fh, 'POST REPRESENTATIVE RESPONSE'."\r\n");
fwrite($fh, var_export($_POST, true));
fwrite($fh, "\r\n\r\n");

$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN, CLIENT_FROM_PHONE);

$response = $client->parseDialCallResponse();

$script = new Majax_Twilio_Twiml();

if ($response->getRecordingUrl())
{
    $recording = file_get_contents($response->getRecordingUrl().'.mp3');
    file_put_contents('recording.mp3', $recording);
    $client->deleteRecording($response->getRecordingSid());
}

if ($response->getDialCallStatus() == 'completed' && $response->getRecordingUrl())
{
    $script->say("Thanks for calling. Good bye!");
} else {
    $script->say('We are sorry, we were not able to reach a representative.');
    $script->say('If you would like to leave a message, please do so after the tone.');
    $script->record(BASE_URL.'/script-client-post-voicemail.php', null, null, null, null, true);
    $script->say('Thank you, good bye!');
}

echo $script->toString();
