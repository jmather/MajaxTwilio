<?php

class Majax_Twilio_Client_Status_TranscriptResponse extends Majax_Twilio_Client_Incoming_CallRequest
{
    private $recording_sid;
    private $recording_url;
    private $transcription_text;
    private $transcription_sid;
    private $transcription_status;

    public function __construct($vars)
    {
        if (isset($vars['RecordingSid']))
            $this->recording_sid = $vars['RecordingSid'];
        if (isset($vars['RecordingUrl']))
            $this->recording_url = $vars['RecordingUrl'];
        if (isset($vars['Price']))
            $this->price = $vars['Price'];
        if (isset($vars['TranscriptionText']))
            $this->transcription_text = $vars['TranscriptionText'];
        if (isset($vars['TranscriptionStatus']))
            $this->transcription_status = $vars['TranscriptionStatus'];
        if (isset($vars['TranscriptionSid']))
            $this->transcription_sid = $vars['TranscriptionSid'];
    }

    public function getRecordingUrl()
    {
        return $this->recording_url;
    }

    public function getRecordingSid()
    {
        return $this->recording_sid;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setTranscriptionText($transcript_text)
    {
        $this->transcription_text = $transcript_text;
    }

    public function getTranscriptionText()
    {
        return $this->transcription_text;
    }

    public function setTranscriptionSid($transcription_sid)
    {
        $this->transcription_sid = $transcription_sid;
    }

    public function getTranscriptionSid()
    {
        return $this->transcription_sid;
    }

    public function setTranscriptionStatus($transcription_status)
    {
        $this->transcription_status = $transcription_status;
    }

    public function getTranscriptionStatus()
    {
        return $this->transcription_status;
    }
}
