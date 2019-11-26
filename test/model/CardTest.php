<?php

class CardTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function shouldHaveValidGameValue()
    {
        $sut = new \model\Card();
        $actual = $sut->getGameValue();

        $this->assertTrue(1 <= $actual && $actual <= 10);
    }
}
