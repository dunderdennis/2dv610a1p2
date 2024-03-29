<?php

class CardTest extends PHPUnit\Framework\TestCase
{
    /** @test 
     *  @dataProvider validCardIndexesProvider */
    public function shouldHaveValidGameValue($cardIndex)
    {
        $sut = new \model\Card($cardIndex);
        $actual = $sut->getGameValue();

        $this->assertTrue(1 <= $actual && $actual <= 10, 'Game value of a card must be 1-10.');
    }

    /** @test 
     *  @dataProvider CardIndexesWithHeartsColorProvider */
    public function shouldHaveColorHearts($cardIndex)
    {
        $sut = new \model\Card($cardIndex);
        $actual = $sut->getColor();
        $expected = 'hearts';

        $this->assertEquals($actual, $expected, 'Card indexes 1-13 should have color: hearts.');
    }

    /** @test 
     *  @dataProvider CardIndexesWithDiamondsColorProvider */
    public function shouldHaveColorDiamonds($cardIndex)
    {
        $sut = new \model\Card($cardIndex);
        $actual = $sut->getColor();
        $expected = 'diamonds';

        $this->assertEquals($actual, $expected, 'Card indexes 14-26 should have color: diamonds.');
    }

    /** @test 
     *  @dataProvider CardIndexesWithClubsColorProvider */
    public function shouldHaveColorClubs($cardIndex)
    {
        $sut = new \model\Card($cardIndex);
        $actual = $sut->getColor();
        $expected = 'clubs';

        $this->assertEquals($actual, $expected, 'Card indexes 27-39 should have color: clubs.');
    }

    /** @test 
     *  @dataProvider CardIndexesWithSpadesColorProvider */
    public function shouldHaveColorSpades($cardIndex)
    {
        $sut = new \model\Card($cardIndex);
        $actual = $sut->getColor();
        $expected = 'spades';

        $this->assertEquals($actual, $expected, 'Card indexes 40-52 should have color: spades.');
    }

    /** @test 
     *  @dataProvider CardIndexesWithDressedCardsProvider */
    public function shouldHaveGameValue10OnDressedCards($cardIndex)
    {
        $sut = new \model\Card($cardIndex);
        $actual = $sut->getGameValue();
        $expected = 10;

        $this->assertEquals($actual, $expected, 'Dressed cards should have game value: 10.');
    }



    // Data providers

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

    public function CardIndexesWithSpadesColorProvider()
    {
        $cardIndexes = array();
        for ($i = 40; $i <= 52; $i++) {
            $cardIndex = array();
            array_push($cardIndex, $i);
            array_push($cardIndexes, $cardIndex);
        }
        return $cardIndexes;
    }

    public function CardIndexesWithDressedCardsProvider()
    {
        $cardIndexes = array([11], [12], [13], [24], [25], [26], [37], [38], [39], [50], [51], [52]);
        return $cardIndexes;
    }
}
