<?php

class DeckTest extends PHPUnit\Framework\TestCase
{
    private $mockCardFactory;

    public function setUp(): void
    {
        $this->mockCardFactory = $this->getMockBuilder("\model\CardFactory")
            ->setMethods(["create"])
            ->getMock();
    }

    /** @test 
     *  @dataProvider cardIndexesProvider */
    public function shouldContain52Cards()
    {
        $sut = new \model\Deck($this->mockCardFactory);
        $actual = $sut->getCards();

        $this->assertTrue(count($actual) == 52, 'A deck must contain exactly 52 cards.');
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
