<?php

class Notification
{
    public  $variable1 = [];
    public static $variables1 = [];

    private $variable2 = [];

    protected  $variable3 = [];


    public function __construct()
    {
        $this->variable1 = '';
        $this->variable2 = '';
        $this->variable3 = '';
    }


    public function __construct()
    {
        $this->variable1 = '';
        $this->variable2 = '';
        $this->variable3 = '';
    }
    public function __destruct()
    {

    }

    public function __call($name, $arguments)
    {

    }

    public static function __callStatic($name, $arguments)
    {

    }

    public function __get($name)
    {

    }

    public function __set($name, $value)
    {
    }

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
    }

    public function __unset($name)
    {
        // TODO: Implement __unset() method.
    }

    public function __sleep()
    {
        // TODO: Implement __sleep() method.
    }

    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }

    public function __debugInfo()
    {

    }

    public static function __set_state($an_array)
    {

    }

    public function __clone()
    {

    }

    public function __serialize(): array
    {

    }

    public function __unserialize(array $data): void
    {

    }


}

$notification = new Notification();
var_dump($notification);
die();