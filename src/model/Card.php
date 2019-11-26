<?php

namespace model;

const HEARTS = 'hearts';
const DIAMONDS = 'diamonds';
const CLUBS = 'clubs';
const SPADES = 'spades';

class Card
{
    private $gameValue;
    private $color;

    public function __construct(int $cardIndex)
    {
        if ($cardIndex <= 13) {
            $this->color = HEARTS;
        } else if ($cardIndex <= 26) {
            $this->color = DIAMONDS;
        } else if ($cardIndex <= 39) {
            $this->color = CLUBS;
        } else if ($cardIndex <= 52) {
            $this->color = SPADES;
        }

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
