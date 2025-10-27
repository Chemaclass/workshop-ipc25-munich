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
        $rockPaperScissor = new RockPaperScissor();
        $this->assertEquals($expectedResult, $rockPaperScissor->playHands($playerHand, $opponentHand));
    }
    public static function handsProvider(): array
    {
        return [
            [RockPaperScissor::ROCK, RockPaperScissor::SCISSORS, RockPaperScissor::PLAYER_WINS],
            [RockPaperScissor::SCISSORS, RockPaperScissor::ROCK, RockPaperScissor::OPPONENT_WINS],
            [RockPaperScissor::PAPER, RockPaperScissor::ROCK, RockPaperScissor::PLAYER_WINS],
            [RockPaperScissor::ROCK, RockPaperScissor::PAPER, RockPaperScissor::OPPONENT_WINS],
            [RockPaperScissor::SCISSORS, RockPaperScissor::PAPER, RockPaperScissor::PLAYER_WINS],
            [RockPaperScissor::PAPER, RockPaperScissor::SCISSORS, RockPaperScissor::OPPONENT_WINS],
            [RockPaperScissor::PAPER, RockPaperScissor::PAPER, RockPaperScissor::DRAW],
            [RockPaperScissor::SCISSORS, RockPaperScissor::SCISSORS, RockPaperScissor::DRAW],
            [RockPaperScissor::ROCK, RockPaperScissor::ROCK, RockPaperScissor::DRAW],
        ];
    }
}
