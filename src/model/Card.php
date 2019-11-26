<?php

namespace model;

class Card
{
    private $gameValue;

    public function __construct()
    { 
        $this->gameValue = 1;
    }

    public function getGameValue()
    {
        return $this->gameValue;
    }
}
