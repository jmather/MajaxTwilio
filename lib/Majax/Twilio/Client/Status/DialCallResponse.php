<?php

class Majax_Twilio_Client_Status_DialCallResponse extends Majax_Twilio_Client_Incoming_CallRequest
{
    private $dial_call_status;
    private $dial_call_sid;
    private $dial_call_duration;
    private $recording_url;
    private $recording_sid;
    private $recording_duration;

    public function __construct($vars)
    {
        $this->dial_call_status = $vars['DialCallStatus'];
        $this->dial_call_sid = $vars['DialCallSid'];
        if (isset($vars['DialCallDuration']))
            $this->dial_call_duration = $vars['DialCallDuration'];

        if (isset($vars['RecordingUrl']))
            $this->recording_url = $vars['RecordingUrl'];
        if (isset($vars['RecordingSid']))
            $this->recording_sid = $vars['RecordingSid'];
        if (isset($vars['RecordingDuration']))
            $this->recording_duration = $vars['RecordingDuration'];
    }

    public function getDialCallDuration()
    {
        return $this->dial_call_duration;
    }

    public function getDialCallSid()
    {
        return $this->dial_call_sid;
    }

    public function getDialCallStatus()
    {
        return $this->dial_call_status;
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

}