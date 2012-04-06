<?php

class Majax_Twilio_Client_Account
{
    /** @var Services_Twilio */
    private $client;

    public function __construct(Services_Twilio $client)
    {
        $this->client = $client;
    }

    public function createSubAccount($name = null)
    {
        $params = array();
        if ($name)
            $params['FriendlyName'] = $name;

        return $this->client->accounts->create($params);
    }

    public function deleteSubAccount($sid)
    {
        return $this->client->accounts->get($sid)->update(array('status' => 'closed'));
    }

    public function getSubAccountBySid($sid)
    {
        return $this->client->accounts->get($sid);
    }
}