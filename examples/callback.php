<?php

$log = dirname(__FILE__).'/log.txt';

$fh = fopen($log, 'a');

fwrite($fh, var_export($_POST, true));
fwrite($fh, "\r\n\r\n");