<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RPSGame;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ChangeMeTest extends TestCase
{

    #[DataProvider('dataProvider')]
    public function test_draw(string $player1, string $player2, string $expected): void
    {
        $game = new RPSGame();
        self::assertEquals($expected, $game->play($player1, $player2));
    }

    public static function dataProvider(): array
    {
        return [
            ['rock', 'rock', 'draw'],
            ['paper', 'paper', 'draw'],
            ['scissors', 'scissors', 'draw'],
            ['rock', 'scissors', 'player1'],
            ['scissors', 'rock', 'player2'],
            ['paper', 'rock', 'player1'],
            ['rock', 'paper', 'player2'],
            ['scissors', 'paper', 'player1'],
            ['paper', 'scissors', 'player2'],
        ];
    }
}
