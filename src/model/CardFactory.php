<?php

namespace model;

class CardFactory
{
    public function create($cardIndex)
    {
        return new Card($cardIndex);
    }
}
