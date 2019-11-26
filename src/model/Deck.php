<?php

namespace model;

class Deck {
    private $cards;
    private $discardedCards;

    public function __construct(CardFactory $cardFactory) {
        $this->cards = array();
        $this->discardedCards = array();

        for ($i = 1; $i <= 52; $i++) {
            $newCard = $cardFactory->create($i);
            array_push($this->cards, $newCard);
        };
    }

    public function getCards() {
        return $this->cards;
    }

    public function getDiscardedCards() {
        return $this->discardedCards;
    }
}