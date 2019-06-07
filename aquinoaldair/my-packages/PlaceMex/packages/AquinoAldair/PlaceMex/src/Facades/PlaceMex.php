<?php

namespace AquinoAldair\PlaceMex\Facades;

use Illuminate\Support\Facades\Facade;

class PlaceMex extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'placemex';
    }
}
