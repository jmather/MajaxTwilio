<?php

class Majax_Twilio_Client_Status_ValidatorResponse extends Majax_Twilio_Client_Incoming_CallRequest
{
    private $verification_status;
    private $outgoing_caller_id_sid;

    public function __construct($vars)
    {
        parent::__construct($vars);
        if (isset($vars['VerificationStatus']))
            $this->verification_status = $vars['VerificationStatus'];
        if (isset($vars['OutgoingCallerIdSid']))
            $this->outgoing_caller_id_sid = $vars['OutgoingCallerIdSid'];
    }

    public function getOutgoingCallerIdSid()
    {
        return $this->outgoing_caller_id_sid;
    }

    public function getVerificationStatus()
    {
        return $this->verification_status;
    }
}