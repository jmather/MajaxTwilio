<?php

class Majax_Twilio_Client_Validator
{
    /**
     * @var Services_Twilio
     */
    private $client;

    private $phone_number;

    private $call_delay = 0;

    private $friendly_name;

    private $extension;

    private $status_callback;

    private $status_callback_method;

    public function __construct(Services_Twilio $client, $phone_number = null)
    {
        $this->client = $client;
        $this->phone_number = $phone_number;
    }

    public function validate()
    {
        $params = array(
            'CallDelay' => $this->call_delay,
        );
        if ($this->friendly_name)
            $params['FriendlyName'] = $this->friendly_name;
        if ($this->extension)
            $params['Extension'] = $this->extension;
        if ($this->status_callback)
            $params['StatusCallback'] = $this->status_callback;
        if ($this->status_callback_method)
            $params['StatusCallbackMethod'] = $this->status_callback_method;

        $ret = $this->client->account->outgoing_caller_ids->create($this->phone_number, $params);
        return new Majax_Twilio_Client_Response_Validator($ret);
    }

    public function setCallDelay($call_delay)
    {
        $this->call_delay = $call_delay;
        return $this;
    }

    public function getCallDelay()
    {
        return $this->call_delay;
    }

    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    public function getExtension()
    {
        return $this->extension;
    }

    public function setFriendlyName($friendly_name)
    {
        $this->friendly_name = $friendly_name;
        return $this;
    }

    public function getFriendlyName()
    {
        return $this->friendly_name;
    }

    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
        return $this;
    }

    public function getPhoneNumber()
    {
        return $this->phone_number;
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
}