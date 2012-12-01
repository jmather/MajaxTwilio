<?php

define('TWILIO_ACCOUNT_SID', '');
define('TWILIO_AUTH_TOKEN', '');

define('REPRESENTATIVE_FROM_PHONE', '+14155992671');
define('REPRESENTATIVE_PHONE', '+');

define('CLIENT_FROM_PHONE', '+14155992671');
define('CLIENT_PHONE', '+');


require_once dirname(__FILE__).'/../../vendor/twilio/sdk/Services/Twilio.php';

define('BASE_URL', 'http://example.com/');

require dirname(__FILE__) . '/../../vendor/autoload.php';
