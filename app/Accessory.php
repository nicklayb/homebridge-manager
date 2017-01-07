<?php

namespace App;

class Accessory
{
    const OFF_URL = 'off_url';
    const ON_URL = 'on_url';
    const NAME = 'name';
    const TYPE = 'accessory';
    protected $attributes;

    public function __construct($attributes)
    {
        $this->attributes = $attributes;
    }

    public function getAttribute($key)
    {
        return $this->getAttributes()->{$key};
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function getOnUrl()
    {
        return $this->getAttribute(static::ON_URL);
    }

    public function getOffUrl()
    {
        return $this->getAttribute(static::OFF_URL);
    }

    public function getName()
    {
        return $this->getAttribute(static::NAME);
    }

    public function toArray()
    {
        return $this->
    }
}
