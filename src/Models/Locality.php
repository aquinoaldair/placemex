<?php


namespace AquinoAldair\PlaceMex\Models;
use AquinoAldair\PlaceMex\Interfaces\Findeable;

class Locality extends Base implements Findeable
{
    const NAME = "localidades";

    /**
     * Locality constructor.
     */
    public function __construct()
    {
        parent::__construct(self::NAME);
    }


    /**
     * @param $id
     * @return \Illuminate\Support\Collection|string
     */
    public function findByParentId($id){
        $municipality = Municipality::NAME;
        $this->url = $this->url."/{$municipality}/id/{$id}";
        return $this->get();
    }
}