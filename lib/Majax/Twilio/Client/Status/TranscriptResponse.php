<?php

class Majax_Twilio_Client_Status_TranscriptResponse extends Majax_Twilio_Client_Incoming_CallRequest
{
    private $recording_sid;
    private $recording_duration;
    private $transcript_text;
    private $price;
    private $status;

    public function __construct($vars)
    {
        if (isset($vars['RecordingSid']))
            $this->recording_sid = $vars['RecordingSid'];
        if (isset($vars['Duration']))
            $this->recording_duration = $vars['Duration'];
        if (isset($vars['Price']))
            $this->price = $vars['Price'];
        if (isset($vars['TranscriptText']))
            $this->transcript_text = $vars['TranscriptText'];
        if (isset($vars['Status']))
            $this->status = $vars['Status'];
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

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setTranscriptText($transcript_text)
    {
        $this->transcript_text = $transcript_text;
    }

    public function getTranscriptText()
    {
        return $this->transcript_text;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

}
