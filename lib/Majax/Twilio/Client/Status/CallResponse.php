<?php

class Majax_Twilio_Client_Status_CallResponse extends Majax_Twilio_Client_Incoming_CallRequest
{
    private $duration;
    private $recording_url;
    private $recording_sid;
    private $recording_duration;
    private $answered_by;

    public function __construct($vars)
    {
        if (isset($vars['Duration']))
            $this->duration = $vars['Duration'];
        if (isset($vars['RecordingUrl']))
            $this->recording_url = $vars['RecordingUrl'];
        if (isset($vars['RecordingSid']))
            $this->recording_sid = $vars['RecordingSid'];
        if (isset($vars['RecordingDuration']))
            $this->recording_duration = $vars['RecordingDuration'];
        if (isset($vars['AnsweredBy']))
            $this->answered_by = $vars['AnsweredBy'];
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getRecordingDuration()
    {
        return $this->recording_duration;
    }

    public function getRecordingSid()
    {
        return $this->recording_sid;
    }

    public function getRecordingUrl()
    {
        return $this->recording_url;
    }

    public function getAnsweredBy()
    {
        return $this->answered_by;
    }
}