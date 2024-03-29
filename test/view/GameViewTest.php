<?php

class GameViewTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function shouldGenerateWelcomeMessage()
    {
        $sut = new \view\GameView();
        $actual = $sut->generateWelcomeMessage();
        $expected = "Welcome to this blackjack game!";

        $this->assertEquals($expected, $actual);
    }
}
