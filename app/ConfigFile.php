<?php

namespace App;

use App\SingletonTrait;

class ConfigFile
{
    use SingletonTrait;

    const FILENAME = 'config.json';

    protected $path;
    protected $jsonAttributes;
    protected $bridgeConfigurations;
    protected $platforms;
    protected $accessories;

    private function __construct()
    {
        $this->setPath(env('CONFIG_PATH', ''));
        $this->load();
    }

    public function load()
    {
        $this->extractJson();
        $this->loadBridgeConfigurations();
        $this->loadAccessories();
    }

    public function getJsonAttributes($key = null)
    {
        $base = $this->jsonAttributes;
        if ($key != null) {
            return $base->$key;
        }
        return $base;
    }

    public function loadBridgeConfigurations()
    {
        $this->bridgeConfigurations = $this->getJsonAttributes('bridge');
    }

    public function loadAccessories()
    {
        $this->accessories = collect();
        foreach ($this->getJsonAttributes('accessories') as $key => $accessoryJson) {
            $this->accessories->push(new Accessory($accessoryJson));
        }
    }

    public function getAccessories()
    {
        return $this->accessories;
    }

    public function extractJson()
    {
        $this->jsonAttributes = json_decode(file_get_contents($this->getQualifiedFilename()));
    }

    public function fileExists()
    {
        return file_exists($this->getQualifiedFilename());
    }

    public function getQualifiedFilename()
    {
        return $this->getPath().'/'.static::FILENAME;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = substr($path, 0, strlen($path) - ((substr($path, -1) == '/') ? 1 : 0));
    }
}
