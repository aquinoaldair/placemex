<?php

namespace AquinoAldair\PlaceMex\Models;
use AquinoAldair\PlaceMex\Interfaces\Findeable;

class Municipality extends Base implements Findeable
{
    const NAME = "municipios";

    /**
     * Municipality constructor.
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
        $state = State::NAME;
        $this->url = $this->url."/{$state}/id/{$id}";
        return $this->get();
    }


}