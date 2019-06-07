<?php


namespace AquinoAldair\PlaceMex\Models;
use GuzzleHttp\Client;
use Exception;
use Illuminate\Support\Facades\Config;

class Base
{
    public $url;

    /**
     * Base constructor.
     * @param $base_url
     */
    public function __construct($base_url)
    {
        $this->instance = new Client([
            "base_uri" => Config::get('placemex.base_uri'),
            "connect_timeout" => Config::get('placemex.connect_timeout')
        ]);

        $this->url = $base_url;
    }

    /**
     * @return \Illuminate\Support\Collection|string
     */
    public function all(){
        return $this->get();
    }

    /**
     * @return \Illuminate\Support\Collection|string
     */
    protected function get(){
        try{
            $response = $this->instance->request('GET', $this->url);
            return collect(json_decode($response->getBody()->getContents(), true));
        }
        catch (Exception $e){
            return  $e->getMessage();
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Support\Collection|string
     */
    public function findById(int $id){
        $this->setId($id);
        return $this->get();
    }

    /**
     * @param $id
     */
    private function setId($id){
        $this->url = $this->url. "/id/{$id}";
    }

    /**
     * @param string $name
     * @return \Illuminate\Support\Collection|string
     */
    public function findByName(string $name){
        $this->setName($name);
        return $this->get();
    }

    /**
     * @param $name
     */
    private function setName($name){
        $this->url = $this->url. "/nombre/{$name}";
    }

    /**
     * @param $word
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function search($word){
        $this->setSearch($word);
        return $this->instance->get($this->url);
    }

    /**
     * @param $word
     */
    private function setSearch($word){
        $this->url = $this->url. "/busqueda?palabra={$word}";
    }
}