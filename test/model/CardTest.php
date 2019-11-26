<?php

class CardTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function shouldHaveValidGameValue()
    {
        $sut = new \model\Card(8);
        $actual = $sut->getGameValue();

        $this->assertTrue(1 <= $actual && $actual <= 10, 'Game value of a card must be 1-10.');
    }
}
