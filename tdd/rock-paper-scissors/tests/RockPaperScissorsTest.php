<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissor;
use PHPUnit\Framework\TestCase;

final class RockPaperScissorsTest extends TestCase
{

    #[ \PHPUnit\Framework\Attributes\DataProvider('handsProvider') ]
    public function testHands(): void
    {
        $rockPaperScissor = new RockPaperScissor();
        $this->assertEquals(RockPaperScissor::PLAYER_WINS, $rockPaperScissor->playHands('rock', 'scissors'));
    }
    public static function handsProvider(): array
    {
        return [
            ['rock', 'scissors', RockPaperScissor::PLAYER_WINS],
            ['scissors', 'rock', RockPaperScissor::OPPONENT_WINS],
            ['paper', 'rock', RockPaperScissor::PLAYER_WINS],
        ];
    }
}
