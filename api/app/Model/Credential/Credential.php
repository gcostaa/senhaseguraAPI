<?php

namespace senhasegura\Api\Model\Credential;
use senhasegura\Api\Model\EntidadePam;
use senhasegura\Api\Model\Keys\AccessKeys;

class Credential implements EntidadePam
{

    private string $username;
    private string $conteudo;
    private string $hostname;
    private string $ip;
    private string $tipo_senha;

    public AccessKeys $keys;
    
    public function __construct(Array $data, string $method)
    {
        
        $this->keys = $this->getAccessKey();


        if ($method === 'post')
        {

            $this->incializeCredentialForPost($data);

        }

    }


    public function get(Array $data){
      
    return $url = "https://".$this->keys->getValtIp().
    "/iso/pam/credential/".$data[0].
    "?oauth_consumer_key=".
    $this->keys->getOauthConsumerKey().
    "&oauth_token=".$this->keys->getOauthToken().
    "&oauth_signature=".$this->keys->getOauthSignature();

    }

    public function post(Array $data){

        return $url = "https://".$this->keys->getValtIp().
        "/iso/pam/credential".
        "?username=".$this->username.
        "&content=".$this->conteudo.
        "&type=".$this->tipo_senha.
        "&hostname=".$this->hostname.
        "&ip=".$this->ip.
        "&oauth_consumer_key=".
        $this->keys->getOauthConsumerKey().
        "&oauth_token=".$this->keys->getOauthToken().
        "&oauth_signature=".$this->keys->getOauthSignature();

    }

    public function delete(){

        //implementação futura
        
    }

    public function getAccessKey()
    {
        
        return $keys = new AccessKeys();

    }
    
    public function incializeCredentialForPost(Array $data)
    
    {

        $this->username = $data[1];
        $this->conteudo = $data[2];
        $this->tipo_senha = $data[3];
        $this->hostname = $data[4];
        $this->ip = $data[5];
                
    }

    
}