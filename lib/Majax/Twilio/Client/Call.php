<?php

class Majax_Twilio_Client_Call
{
    /**
     * @var Services_Twilio
     */
    private $client;
    private $from;
    private $to;
    private $script_url;
    private $method;
    private $status_callback;
    private $status_callback_method;
    private $send_digits;
    private $if_machine;
    private $timeout;
    private $record;
    private $application_sid;

    public function __construct(Services_Twilio $client, $from, $to, $script_url = null)
    {
        $this->client = $client;
        $this->from = $from;
        $this->to = $to;
        $this->script_url = $script_url;
        $this->method = null;
        $this->status_callback == null;
        $this->status_callback_method = null;
        $this->send_digits = null;
        $this->if_machine = null;
        $this->timeout = null;
        $this->record = null;
        $this->application_sid == null;
    }

    /**
     * @return string SMS Id
     * @throws Exception
     */
    public function send()
    {
        try {
            $opts = array();
            if ($this->method)
                $opts['Method'] = $this->method;
            if ($this->status_callback)
                $opts['StatusCallback'] = $this->status_callback;
            if ($this->status_callback_method)
                $opts['StatusCallbackMethod'] = $this->status_callback_method;
            if ($this->send_digits)
                $opts['SendDigits'] = $this->send_digits;
            if ($this->if_machine)
                $opts['IfMachine'] = $this->if_machine;
            if ($this->timeout)
                $opts['Timeout'] = $this->timeout;
            if ($this->record)
                $opts['Record'] = $this->record;
            if ($this->application_sid)
                $opts['ApplicationSid'] = $this->application_sid;
            $message = $this->client->account->calls->create(
                $this->from,
                $this->to,
                $this->script_url,
                $opts
            );
            return $message->sid;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function setApplicationSid($application_sid)
    {
        $this->application_sid = $application_sid;
        return $this;
    }

    public function getApplicationSid()
    {
        return $this->application_sid;
    }

    /**
     * @param \Services_Twilio $client
     */
    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @return \Services_Twilio
     */
    public function getClient()
    {
        return $this->client;
    }

    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function setIfMachine($if_machine)
    {
        $this->if_machine = $if_machine;
        return $this;
    }

    public function getIfMachine()
    {
        return $this->if_machine;
    }

    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setRecord($record)
    {
        $this->record = $record;
        return $this;
    }

    public function getRecord()
    {
        return $this->record;
    }

    public function setScriptUrl($script_url)
    {
        $this->script_url = $script_url;
        return $this;
    }

    public function getScriptUrl()
    {
        return $this->script_url;
    }

    public function setSendDigits($send_digits)
    {
        $this->send_digits = $send_digits;
        return $this;
    }

    public function getSendDigits()
    {
        return $this->send_digits;
    }

    public function setStatusCallback($status_callback)
    {
        $this->status_callback = $status_callback;
        return $this;
    }

    public function getStatusCallback()
    {
        return $this->status_callback;
    }

    public function setStatusCallbackMethod($status_callback_method)
    {
        $this->status_callback_method = $status_callback_method;
        return $this;
    }

    public function getStatusCallbackMethod()
    {
        return $this->status_callback_method;
    }

    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function getTimeout()
    {
        return $this->timeout;
    }

    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }

    public function getTo()
    {
        return $this->to;
    }
}