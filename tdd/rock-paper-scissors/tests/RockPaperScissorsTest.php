<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissor;
use PHPUnit\Framework\TestCase;

final class RockPaperScissorsTest extends TestCase
{

    #[ \PHPUnit\Framework\Attributes\DataProvider('handsProvider') ]
    public function testHands(string $playerHand, string $opponentHand, string $expectedResult): void
    {
        $handsProvider = self::handsProvider();
        $rockPaperScissor = new RockPaperScissor();
        $this->assertEquals($expectedResult, $rockPaperScissor->playHands($playerHand, $opponentHand));
    }
    public static function handsProvider(): array
    {
        return [
            ['rock', 'scissors', RockPaperScissor::PLAYER_WINS],
            ['scissors', 'rock', RockPaperScissor::OPPONENT_WINS],
            ['paper', 'rock', RockPaperScissor::PLAYER_WINS],
            ['rock', 'paper', RockPaperScissor::OPPONENT_WINS],
        ];
    }
}
