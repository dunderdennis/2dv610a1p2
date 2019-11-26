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

    /** @test 
     *  @dataProvider CardIndexesWithHeartsColorProvider
     */
    public function shouldHaveColorHearts($cardIndex)
    {
        $sut = new \model\Card($cardIndex);
        $actual = $sut->getColor();
        $expected = 'hearts';

        $this->assertEquals($actual, $expected, 'Card indexes 1-13 should have color: hearts.');
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

    public function CardIndexesWithHeartsColorProvider()
    {
        $cardIndexes = array();
        for ($i = 1; $i <= 13; $i++) {
            $cardIndex = array();
            array_push($cardIndex, $i);
            array_push($cardIndexes, $cardIndex);
        }
        return $cardIndexes;
    }
}
