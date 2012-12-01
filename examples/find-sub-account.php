<?php

require dirname(__FILE__).'/config.php';

$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN);

$accounts = $client->getAccountClient();

$acct = $accounts->getSubAccountBySid($_SERVER['argv'][1]);

echo $acct->auth_token."\r\n";
echo $acct->friendly_name."\r\n";
echo $acct->status."\r\n";
