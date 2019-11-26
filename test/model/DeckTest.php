<?php

class DeckTest extends PHPUnit\Framework\TestCase
{
    // private $mockCardFactory;

    // public function setUp()
    // {
    //     $this->mockCardFactory = $this->getMockBuilder("Card")
    //         ->setConstructorArgs([15])
    //         ->setMethods(["getGameValue"])
    //         ->getMock();

    //     $this->mockCard->method("getGameValue")
    //         ->willReturn(2);
    // }

    /** @test 
     *  @dataProvider cardIndexesProvider */
    public function shouldContain52Cards()
    {
        $sut = new \model\Deck();
        $actual = $sut->getDeck();

        $this->assertTrue($actual == 52, 'A deck must contain exactly 52 cards.');
    }



    // Data providers

    public function cardIndexesProvider()
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
