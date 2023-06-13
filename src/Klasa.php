<?php

namespace App;
use Exception;


class Klasa
{
    private $configFile;

    public function __construct($fileName)
    {
        if(file_exists($fileName)){
            $this->configFile = include($fileName);
        }
        else{
            throw new Exception('Config file does not exists.');
        }
        
    }
    public function getConfig()
    {
        return $this->configFile;
    }
}

