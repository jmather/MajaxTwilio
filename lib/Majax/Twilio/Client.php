<?php

class Majax_Twilio_Client implements Majax_Twilio_Client_CallInterface, Majax_Twilio_Client_TextInterface, Majax_Twilio_Client_RequestValidatorInterface
{
    /** @var \Services_Twilio */
    private $client;
    private $from;
    private $account_sid;
    private $auth_token;

    public function __construct($account_sid, $auth_token)
    {
        $this->account_sid = $account_sid;
        $this->auth_token = $auth_token;
        $this->client = new Services_Twilio($account_sid, $auth_token);
    }
    /**
     * @param $from
     * @param $to
     * @param $script
     * @return Majax_Twilio_Client_Call
     */
    public function createCall($from, $to, $script = '')
    {
        return new Majax_Twilio_Client_Call($this->client, $from, $to, $script);
    }

    /**
     * @param $from
     * @param $to string
     * @param $message string
     * @return Majax_Twilio_Client_Text
     */
    public function createText($from, $to, $message = '')
    {
        return new Majax_Twilio_Client_Text($this->client, $from, $to, $message);
    }

    public function createPhoneNumberValidator($phone_number)
    {
        return new Majax_Twilio_Client_Validator($this->client, $phone_number);
    }

    public function getAccountClient()
    {
        return new Majax_Twilio_Client_Account($this->client);
    }

    /**
     * @return boolean
     */
    public function validateRequest()
    {
        if (!isset($_SERVER['HTTP_HOST']) || !isset($_SERVER['REQUEST_URI']) || !isset($_SERVER['HTTP_X_TWILIO_SIGNATURE']))
            return false;
        
        $validator = new Services_Twilio_RequestValidator($this->auth_token);
        $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $signature = $_SERVER['HTTP_X_TWILIO_SIGNATURE'];
        $vars = $_POST;
        return $validator->validate($signature, $url, $vars);
    }

    public function parseCallRequest()
    {
        return new Majax_Twilio_Client_Incoming_CallRequest($_POST);
    }

    public function parseCallResponse()
    {
        return new Majax_Twilio_Client_Status_CallResponse($_POST);
    }

    public function parseDialCallResponse()
    {
        return new Majax_Twilio_Client_Status_DialCallResponse($_POST);
    }

    public function parseNumberDialCallResponse()
    {
        return new Majax_Twilio_Client_Status_DialCallResponse($_POST);
    }

    public function parseRecordResponse()
    {
        return new Majax_Twilio_Client_Status_RecordResponse($_POST);
    }

    public function parseTextResponse()
    {
        return new Majax_Twilio_Client_Status_TextResponse($_POST);
    }

    public function parseValidatorResponse()
    {
        return new Majax_Twilio_Client_Status_ValidatorResponse($_POST);
    }

    public function deleteRecording($recording_sid)
    {
        $this->client->account->recordings->delete($recording_sid);
    }
}