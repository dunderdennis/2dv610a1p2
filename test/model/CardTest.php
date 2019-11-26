<?php

class CardTest extends PHPUnit\Framework\TestCase
{
    /** @test 
     *  @dataProvider validCardIndexesProvider
     */
    public function shouldHaveValidGameValue($cardIndex)
    {
        $sut = new \model\Card($cardIndex);
        $actual = $sut->getGameValue();

        $this->assertTrue(1 <= $actual && $actual <= 10, 'Game value of a card must be 1-10.');
    }

    public function validCardIndexesProvider()
    {
        $cardIndexes = array();
        for ($i = 1; $i <= 52; $i++) {
            $cardIndex = array();
            array_push($cardIndex, $i);
            array_push($cardIndexes, $cardIndex);
        }
        return $cardIndexes;
    }
}
