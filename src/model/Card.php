<?php

namespace model;

class Card
{
    private $gameValue;
    private $color;

    public function __construct(int $cardIndex)
    {
        if ($cardIndex <= 13) {
            $this->color = "hearts";
        } else if ($cardIndex <= 26) {
            $this->color = "diamonds";
        } /*else if ($cardIndex <= 39) {
            $this->color = "clubs";
        } else if ($cardIndex <= 52) {
            $this->color = "spades";
        }*/

        $this->gameValue = ($cardIndex % 10) + 1;
    }

    public function getGameValue()
    {
        return $this->gameValue;
    }

    public function getColor()
    {
        return $this->color;
    }
}
