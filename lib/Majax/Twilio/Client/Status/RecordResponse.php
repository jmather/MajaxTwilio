<?php

class Majax_Twilio_Client_Status_RecordResponse extends Majax_Twilio_Client_Incoming_CallRequest
{
    private $digits;
    private $recording_url;
    private $recording_sid;
    private $recording_duration;

    public function __construct($vars)
    {
        if (isset($vars['Digits']))
            $this->digits = $vars['Digits'];
        if (isset($vars['RecordingUrl']))
            $this->recording_url = $vars['RecordingUrl'];
        if (isset($vars['RecordingSid']))
            $this->recording_sid = $vars['RecordingSid'];
        if (isset($vars['RecordingDuration']))
            $this->recording_duration = $vars['RecordingDuration'];
    }

    public function getRecordingUrl()
    {
        return $this->recording_url;
    }

    public function getRecordingDuration()
    {
        return $this->recording_duration;
    }

    public function getRecordingSid()
    {
        return $this->recording_sid;
    }

    public function getDigits()
    {
        return $this->digits;
    }

}