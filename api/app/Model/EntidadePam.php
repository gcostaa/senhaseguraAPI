<?php

namespace senhasegura\Api\Model;

interface EntidadePam{

    public function get(Array $data);
    public function post(Array $data);
    public function delete();
    public function getAccessKey();

}