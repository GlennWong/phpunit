<?php
namespace MyGreeter;

class Client
{
    public static $instance;

    /**
     * get Instance
     * @return object
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Client();
        }
        return self::$instance;
    }

    /**
     * get Greeting
     * @return string
     */
    public static function getGreeting()
    {
        $message = '';
        $hour = date('G');

        switch (true) {
            case $hour >= 0 && $hour < 12:
                $message = 'Good morning';
                break;
            case $hour >= 12 && $hour < 18;
                $message = 'Good afternoon';
                break;
            default:
                $message = 'Good evening';
                break;
        }

        return $message;
    }
}
?>