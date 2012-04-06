<?php

class Majax_Twilio_Autoloader
{
    public static function register()
    {
        require_once dirname(__FILE__).'/../../../vendor/twilio-php/Services/Twilio.php';

        spl_autoload_register(array('Majax_Twilio_Autoloader', 'autoload'));
    }
    public static function autoload($class_name)
    {
        $base_path = dirname(__FILE__).'/../../';
        $rel_path = str_replace('_', DIRECTORY_SEPARATOR, $class_name).'.php';
        $full_path = $base_path.DIRECTORY_SEPARATOR.$rel_path;
        if (file_exists($full_path))
        {
            require_once $full_path;
        }
    }
}