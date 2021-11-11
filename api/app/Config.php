<?php

namespace senhasegura\Api;

//require_once 'config.json';

class Config{

    private $jsonFile;

    private function setKeys()
    {

        $this->jsonFile = file_get_contents("config.json",true);
        $data = json_decode($this->jsonFile,true);

        return $data;

    }

    public function getKeys()
    {
       return $this->setKeys();
    }

}