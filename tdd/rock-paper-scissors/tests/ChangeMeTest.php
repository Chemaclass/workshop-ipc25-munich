<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissor;
use PHPUnit\Framework\TestCase;

final class ChangeMeTest extends TestCase
{

    public function testChooseRockAgainstScissors(): void
    {
        $rockPaperScissor = new RockPaperScissor();
        $this->assertTrue($rockPaperScissor->playHands('rock', 'scissors'));
    }

    public function testChooseScissorsAgainstRock(): void
    {
        $rockPaperScissor = new RockPaperScissor();
        $this->assertFalse($rockPaperScissor->playHands('scissors', 'rock'));
    }
}
