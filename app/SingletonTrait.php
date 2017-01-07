<?php

namespace App;

trait SingletonTrait
{
    private static $instance;

    public static function getInstance()
    {
        if (!static::isInstanciated()) {
            static::instanciate();
        }
        return static::$instance;
    }

    public static function isInstanciated()
    {
        return static::$instance != null;
    }

    public static function instanciate()
    {
        static::$instance = new static;
    }
}
