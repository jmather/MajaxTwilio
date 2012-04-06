<?php

class Majax_Twilio_Client_Text
{
    /**
     * @var Services_Twilio
     */
    private $client;
    private $from;
    private $to;
    private $message;
    private $status_callback;
    private $application_sid;

    public function __construct(Services_Twilio $client, $from, $to, $message = '')
    {
        $this->client = $client;
        $this->from = $from;
        $this->to = $to;
        $this->message = $message;
        $this->status_callback == null;
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
            if ($this->status_callback)
                $opts['StatusCallback'] = $this->status_callback;
            if ($this->application_sid)
                $opts['ApplicationSid'] = $this->application_sid;
            $message = $this->client->account->sms_messages->create(
                $this->from,
                $this->to,
                $this->message,
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

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function getMessage()
    {
        return $this->message;
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

    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }

    public function getTo()
    {
        return $this->to;
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

    /**
     * @param \Services_Twilio $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return \Services_Twilio
     */
    public function getClient()
    {
        return $this->client;
    }
}