<?php

class Majax_Twilio_Twiml_Dialer
{
    private $dial;

    public function __construct($dial)
    {
        $this->dial = $dial;
    }

    public function number($phone_number, $preamble_url = null, $send_digits = null)
    {
        $opts = array();
        if ($preamble_url)
            $opts['url'] = $preamble_url;
        if ($send_digits)
            $opts['sendDigits'] = $send_digits;

        $this->dial->number($phone_number, $opts);
    }

    public function client($client_id)
    {
        $this->dial->client($client_id);
    }

    public function conference()
    {
        throw new Exception("Not supported yet! Sorry!");
    }
}