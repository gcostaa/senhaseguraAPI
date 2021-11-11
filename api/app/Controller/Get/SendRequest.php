<?php

namespace senhasegura\Api\Controller\Get;

use senhasegura\Api\Model\Credential\Credential;
use senhasegura\Api\Model\Keys\AccessKeys;
use senhasegura\Api\Model\Request;

class SendRequest
{
    
    
    public function send($operations,$parameters){

        $method = $operations[1];

        $credential = new Credential($parameters,$method);
        $url = $credential->$method($parameters);

        echo $url;

        #initialize the method curl
        $request = curl_init();
    
        #config URL
        curl_setopt($request, CURLOPT_URL, $url);
    
        #get response
        curl_setopt($request,CURLOPT_RETURNTRANSFER,1);

        #skip certificate
        curl_setopt($request, CURLOPT_SSL_VERIFYHOST, FALSE);
    
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE);

        if ($method === 'post')
        {  
            curl_setopt($request, CURLOPT_POST, true);
        }
        
        #send request
        $response = curl_exec($request);
        
        /*

        The View class will return the password values, device in the
        form of text on the screen

        */

        #$view = new View($response);

        echo $response;

        #close connection
        curl_close($request);

    }


}    
