<?php

class Majax_Twilio_Twiml
{
    private $script;

    public function __construct()
    {
        $this->script = new Services_Twilio_Twiml();
    }

    public function say($message)
    {
        $this->script->say($message);
    }

    public function play($url)
    {
        $this->script->play($url);
    }

    public function gather($processing_url, $timeout = null, $number_of_digits = null, $finish_on_key = '#')
    {
        $opts = array();
        $opts['action'] = $processing_url;
        if ($timeout)
            $opts['timeout'] = $timeout;
        if ($number_of_digits)
            $opts['numDigits'] = $number_of_digits;
        if ($finish_on_key)
            $opts['finishOnKey'] = $finish_on_key;

        $this->script->gather($opts);
    }

    public function record($processing_url, $timeout = null, $finish_on_key = null, $max_length = null, $transcribe_url = null, $beep = null)
    {
        $opts = array();
        $opts['action'] = $processing_url;
        if ($timeout)
            $opts['timeout'] = $timeout;
        if ($finish_on_key)
            $opts['finishOnKey'] = $finish_on_key;
        if ($max_length)
            $opts['maxLength'] = $max_length;
        if ($transcribe_url)
        {
            $opts['transcribe'] = 'true';
            $opts['transcribeCallback'] = $transcribe_url;
        }
        if ($beep)
            $opts['playBeep'] = ($beep) ? 'true' : 'false';

        $this->script->record($opts);
    }

    public function dial($caller_id = null, $redirect_url = null, $timeout = null, $record = false, $time_limit = null, $hangup_on_star = null)
    {
        $opts = array();
        if ($caller_id)
            $opts['callerId'] = $caller_id;
        if ($redirect_url)
            $opts['action'] = $redirect_url;
        if ($timeout)
            $opts['timeout'] = $timeout;
        if ($record)
            $opts['record'] = 'true';
        if ($time_limit)
            $opts['timeLimit'] = $time_limit;
        if ($hangup_on_star)
            $opts['hangup'] = 'true';

        return new Majax_Twilio_Twiml_Dialer($this->script->dial(null, $opts));
    }

    public function redirect($url)
    {
        $this->script->redirect($url);
    }

    public function hangup()
    {
        $this->script->hangup();
    }

    public function pause($length)
    {
        $this->script->pause(array('length' => intval($length)));
    }

    public function reject($busy = false)
    {
        $this->script->reject(array('reason' => ($busy) ? 'busy':'rejected'));
    }

    public function toString()
    {
        return $this->script->__toString();
    }

    public function __toString()
    {
        return $this->script->__toString();
    }
}