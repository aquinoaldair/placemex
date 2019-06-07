<?php

namespace AquinoAldair\PlaceMex\Models;


class State extends Base
{
    const NAME = "estados";
    /**
     * Municipality constructor.
     */
    public function __construct()
    {
        parent::__construct(self::NAME);
    }
}