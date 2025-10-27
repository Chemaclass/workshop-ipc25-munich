<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RPSGame;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ChangeMeTest extends TestCase
{

    #[DataProvider('scissorsProvider')]
    public function test_scissors(string $player1, string $player2, string $expected): void
    {
        $game = new RPSGame();
        self::assertEquals($expected, $game->play($player1, $player2));
    }

    public static function scissorsProvider(): array
    {
        return [
            ['scissors', 'scissors', 'draw'],
            ['scissors', 'paper', 'player1'],
            ['scissors', 'rock', 'player2'],
        ];
    }

    #[DataProvider('paperProvider')]
    public function test_paper(string $player1, string $player2, string $expected): void
    {
        $game = new RPSGame();
        self::assertEquals($expected, $game->play($player1, $player2));
    }

    public static function paperProvider(): array
    {
        return [
            ['paper', 'paper', 'draw'],
            ['paper', 'rock', 'player1'],
            ['paper', 'scissors', 'player2'],
        ];
    }


    #[DataProvider('rockProvider')]
    public function test_rock(string $player1, string $player2, string $expected): void
    {
        $game = new RPSGame();
        self::assertEquals($expected, $game->play($player1, $player2));
    }

    public static function rockProvider(): array
    {
        return [
            ['rock', 'rock', 'draw'],
            ['rock', 'scissors', 'player1'],
            ['rock', 'paper', 'player2'],
        ];
    }

}
