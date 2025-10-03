<?php

namespace Audreyrdsc\PhpCep;

Class Search 
{

    private $url = 'https://viacep.com.br/ws/';
    public function getAddressFromZipcode(string $zipcode) : array
    {
        $zipcode = preg_replace('/[^0-9]/im', '', $zipcode);
        $response = file_get_contents($this->url . $zipcode . '/json/');
        
        return (array) json_decode($response);
        
    }
}