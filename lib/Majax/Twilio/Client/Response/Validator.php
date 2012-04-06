<?php

class Majax_Twilio_Client_Response_Validator
{
    private $account_sid;
    private $phone_number;
    private $friendly_name;
    private $validation_code;

    public function __construct($twilio_response)
    {
        $this->account_sid = $twilio_response->account_sid;
        $this->phone_number = $twilio_response->phone_number;
        $this->friendly_name = $twilio_response->friendly_name;
        $this->validation_code = $twilio_response->validation_code;
    }

    public function getAccountSid()
    {
        return $this->account_sid;
    }

    public function getFriendlyName()
    {
        return $this->friendly_name;
    }

    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    public function getValidationCode()
    {
        return $this->validation_code;
    }
}