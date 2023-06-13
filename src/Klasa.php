<?php

namespace App;
use Exception;

class Klasa
{
    private $configFile;

    public function __construct($fileName)
    {
        if (is_string($fileName) && file_exists($fileName)) {
            $this->configFile = require $fileName;
        } else {
            $this->configFile = [];
        }
    }
    public function getConfig()
    {
        return $this->configFile;
    }
}