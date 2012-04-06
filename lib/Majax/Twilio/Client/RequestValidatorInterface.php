<?php

interface Majax_Twilio_Client_RequestValidatorInterface
{
    /**
     * @abstract
     * @return boolean
     */
    public function validateRequest();
}