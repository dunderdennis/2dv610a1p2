<?php

namespace model;

class Card
{
    private $gameValue;

    public function __construct(int $cardIndex)
    {
        $this->gameValue = ($cardIndex % 10) + 1;
    }

    public function getGameValue()
    {
        return $this->gameValue;
    }
}
