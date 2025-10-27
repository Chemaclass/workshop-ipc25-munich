<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissor;
use PHPUnit\Framework\TestCase;

final class RockPaperScissorsTest extends TestCase
{

    #[\PHPUnit\Framework\Attributes\DataProvider('handsProvider')]
    public function testHands(string $playerHand, string $opponentHand, string $expectedResult): void
    {
        $rockPaperScissor = new RockPaperScissor();
        $this->assertEquals($expectedResult, $rockPaperScissor->playHands($playerHand, $opponentHand));
    }

    public static function handsProvider(): iterable
    {
        yield [RockPaperScissor::ROCK, RockPaperScissor::SCISSORS, RockPaperScissor::PLAYER_WINS];
        yield [RockPaperScissor::SCISSORS, RockPaperScissor::ROCK, RockPaperScissor::OPPONENT_WINS];
        yield [RockPaperScissor::PAPER, RockPaperScissor::ROCK, RockPaperScissor::PLAYER_WINS];
        yield [RockPaperScissor::ROCK, RockPaperScissor::PAPER, RockPaperScissor::OPPONENT_WINS];
        yield [RockPaperScissor::SCISSORS, RockPaperScissor::PAPER, RockPaperScissor::PLAYER_WINS];
        yield [RockPaperScissor::PAPER, RockPaperScissor::SCISSORS, RockPaperScissor::OPPONENT_WINS];
        yield [RockPaperScissor::PAPER, RockPaperScissor::PAPER, RockPaperScissor::DRAW];
        yield [RockPaperScissor::SCISSORS, RockPaperScissor::SCISSORS, RockPaperScissor::DRAW];
        yield [RockPaperScissor::ROCK, RockPaperScissor::ROCK, RockPaperScissor::DRAW];
    }
}
