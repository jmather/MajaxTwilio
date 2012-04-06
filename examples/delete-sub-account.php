<?php

require dirname(__FILE__).'/config.php';
require dirname(__FILE__).'/../lib/autoload.php';

$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN);

$accounts = $client->getAccountClient();

$acct = $accounts->deleteSubAccount($_SERVER['argv'][1]);