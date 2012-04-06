<?php

interface Majax_Twilio_Client_CallInterface
{
    /**
     * @abstract
     * @param $from
     * @param $to
     * @param $script
     * @return Majax_Twilio_Client_Call
     */
    public function createCall($from, $to, $script = '');
}