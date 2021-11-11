<?php

require_once("vendor/autoload.php");
#require_once("app/controller/get/request.php");

use senhasegura\Api\Controller\Get\SendRequest;

$request = new SendRequest();

$operations = array_slice($argv,1,2);

$parameters = array_slice($argv,3);

$request->send($operations,$parameters);


?>
