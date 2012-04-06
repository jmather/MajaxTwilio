<?php

class Majax_Twilio_Client_Incoming_CallRequest
{
    private $account_sid;
    private $to_zip;
    private $from_state;
    private $called;
    private $from_country;
    private $caller_country;
    private $called_zip;
    private $direction;
    private $from_city;
    private $called_country;
    private $caller_state;
    private $call_sid;
    private $called_state;
    private $from;
    private $caller_zip;
    private $from_zip;
    private $call_status;
    private $to_city;
    private $to_state;
    private $to;
    private $call_duration;
    private $to_country;
    private $caller_city;
    private $api_version;
    private $caller;
    private $called_city;
    private $forwarded_from;
    private $caller_name;

    public function __construct($vars)
    {
        if (isset($vars['AccountSid']))
            $this->account_sid = $vars['AccountSid'];
        if (isset($vars['ToZip']))
            $this->to_zip = $vars['ToZip'];
        if (isset($vars['FromState']))
            $this->from_state = $vars['FromState'];
        if (isset($vars['Called']))
            $this->called = $vars['Called'];
        if (isset($vars['FromCountry']))
            $this->from_country = $vars['FromCountry'];
        if (isset($vars['CallerCountry']))
            $this->caller_country = $vars['CallerCountry'];
        if (isset($vars['CalledZip']))
            $this->called_zip = $vars['CalledZip'];
        if (isset($vars['Direction']))
            $this->direction = $vars['Direction'];
        if (isset($vars['FromCity']))
            $this->from_city = $vars['FromCity'];
        if (isset($vars['CalledCountry']))
            $this->called_country = $vars['CalledCountry'];
        if (isset($vars['CallerState']))
            $this->caller_state = $vars['CallerState'];
        if (isset($vars['CallSid']))
            $this->call_sid = $vars['CallSid'];
        if (isset($vars['CalledState']))
            $this->called_state = $vars['CalledState'];
        if (isset($vars['From']))
            $this->from = $vars['From'];
        if (isset($vars['CallerZip']))
            $this->caller_zip = $vars['CallerZip'];
        if (isset($vars['FromZip']))
            $this->from_zip = $vars['FromZip'];
        if (isset($vars['CallStatus']))
            $this->call_status = $vars['CallStatus'];
        if (isset($vars['ToCity']))
            $this->to_city = $vars['ToCity'];
        if (isset($vars['ToState']))
            $this->to_state = $vars['ToState'];
        if (isset($vars['To']))
            $this->to = $vars['To'];
        if (isset($vars['ToCountry']))
            $this->to_country = $vars['ToCountry'];
        if (isset($vars['CallerCity']))
            $this->caller_city = $vars['CallerCity'];
        if (isset($vars['ApiVersion']))
            $this->api_version = $vars['ApiVersion'];
        if (isset($vars['Caller']))
            $this->caller = $vars['Caller'];
        if (isset($vars['CalledCity']))
            $this->called_city = $vars['CalledCity'];
        if (isset($vars['CallDuration']))
            $this->call_duration = $vars['CallDuration'];
        if (isset($vars['ForwardedFrom']))
            $this->forwarded_from = $vars['ForwardedFrom'];
        if (isset($vars['CallerName']))
            $this->caller_name = $vars['CallerName'];
    }

    public function getAccountSid()
    {
        return $this->account_sid;
    }

    public function getApiVersion()
    {
        return $this->api_version;
    }

    public function getCallDuration()
    {
        return $this->call_duration;
    }

    public function getCallSid()
    {
        return $this->call_sid;
    }

    public function getCallStatus()
    {
        return $this->call_status;
    }

    public function getCalled()
    {
        return $this->called;
    }

    public function getCalledCity()
    {
        return $this->called_city;
    }

    public function getCalledCountry()
    {
        return $this->called_country;
    }

    public function getCalledState()
    {
        return $this->called_state;
    }

    public function getCalledZip()
    {
        return $this->called_zip;
    }

    public function getCaller()
    {
        return $this->caller;
    }

    public function getCallerCity()
    {
        return $this->caller_city;
    }

    public function getCallerCountry()
    {
        return $this->caller_country;
    }

    public function getCallerState()
    {
        return $this->caller_state;
    }

    public function getCallerZip()
    {
        return $this->caller_zip;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function getFromCity()
    {
        return $this->from_city;
    }

    public function getFromCountry()
    {
        return $this->from_country;
    }

    public function getFromState()
    {
        return $this->from_state;
    }

    public function getFromZip()
    {
        return $this->from_zip;
    }

    public function getTo()
    {
        return $this->to;
    }

    public function getToCity()
    {
        return $this->to_city;
    }

    public function getToCountry()
    {
        return $this->to_country;
    }

    public function getToState()
    {
        return $this->to_state;
    }

    public function getToZip()
    {
        return $this->to_zip;
    }

    public function getCallerName()
    {
        return $this->caller_name;
    }

    public function getForwardedFrom()
    {
        return $this->forwarded_from;
    }
}