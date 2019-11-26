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

    /** @test 
     *  @dataProvider CardIndexesWithDiamondsColorProvider
     */
    public function shouldHaveColorDiamonds($cardIndex)
    {
        $sut = new \model\Card($cardIndex);
        $actual = $sut->getColor();
        $expected = 'diamonds';

        $this->assertEquals($actual, $expected, 'Card indexes 14-26 should have color: diamonds.');
    }

        /** @test 
     *  @dataProvider CardIndexesWithClubsColorProvider
     */
    public function shouldHaveColorClubs($cardIndex)
    {
        $sut = new \model\Card($cardIndex);
        $actual = $sut->getColor();
        $expected = 'clubs';

        $this->assertEquals($actual, $expected, 'Card indexes 27-39 should have color: clubs.');
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

    public function CardIndexesWithDiamondsColorProvider()
    {
        $cardIndexes = array();
        for ($i = 14; $i <= 26; $i++) {
            $cardIndex = array();
            array_push($cardIndex, $i);
            array_push($cardIndexes, $cardIndex);
        }
        return $cardIndexes;
    }

    public function CardIndexesWithClubsColorProvider()
    {
        $cardIndexes = array();
        for ($i = 27; $i <= 39; $i++) {
            $cardIndex = array();
            array_push($cardIndex, $i);
            array_push($cardIndexes, $cardIndex);
        }
        return $cardIndexes;
    }
}
