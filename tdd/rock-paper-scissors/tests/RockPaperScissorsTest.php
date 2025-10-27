<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissor;
use PHPUnit\Framework\TestCase;

final class RockPaperScissorsTest extends TestCase
{

    public function testChooseRockAgainstScissors(): void
    {
        $rockPaperScissor = new RockPaperScissor();
        $this->assertEquals(RockPaperScissor::PLAYER_WINS, $rockPaperScissor->playHands('rock', 'scissors'));
    }

    public function testChooseScissorsAgainstRock(): void
    {
        $rockPaperScissor = new RockPaperScissor();
        $this->assertEquals(RockPaperScissor::OPPONENT_WINS, $rockPaperScissor->playHands('scissors', 'rock'));
    }

    public function testPaperBeatsRock(): void
    {
        $rockPaperScissor = new RockPaperScissor();
        $this->assertEquals(RockPaperScissor::PLAYER_WINS, $rockPaperScissor->playHands('paper', 'rock'));
    }
}
