<?php


namespace AquinoAldair\PlaceMex\Models;


use GuzzleHttp\Client;

class PostalCode
{
    private $url;
    private $instance;

    /**
     * PostalCode constructor.
     */
    public function __construct()
    {
        $this->instance = new Client();
    }

    /**
     * @param $cp
     * @return \Illuminate\Support\Collection
     */
    public function find($cp){
        $this->url = "http://sepomex.789.mx/{$cp}";
        return $this->get();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    private function get(){
        $response = $this->instance->request('GET', $this->url);
        return collect(json_decode($response->getBody()->getContents(), true));
    }
}