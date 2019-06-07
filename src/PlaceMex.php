<?php

namespace AquinoAldair\PlaceMex;

use AquinoAldair\PlaceMex\Models\Locality;
use AquinoAldair\PlaceMex\Models\Municipality;
use AquinoAldair\PlaceMex\Models\PostalCode;
use AquinoAldair\PlaceMex\Models\State;

class PlaceMex
{

    public  function states(){
        return new State();
    }

    public function municipalities(){
        return new Municipality();
    }

    public function localities(){
        return new Locality();
    }

    public function postalCode(){
        return new PostalCode();
    }
}