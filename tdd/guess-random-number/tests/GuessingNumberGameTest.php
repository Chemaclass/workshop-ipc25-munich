<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GuessingNumberGame;
use Kata\StubGenerator;
use PHPUnit\Framework\TestCase;

final class GuessingNumberGameTest extends TestCase
{
    public function test_same_number(): void
    {
        $game = new GuessingNumberGame(new StubGenerator(5));

        self::assertEquals('win', $game->play(5));
    }

    public function test_lower_number(): void
    {
        $game = new GuessingNumberGame(new StubGenerator(5));

        self::assertEquals('higher', $game->play(4));
    }
    
    public function test_higher_number(): void
    {
        $game = new GuessingNumberGame(new StubGenerator(5));

        self::assertEquals('lower', $game->play(6));
    }

    public function test_3_attempts_loose(): void
    {
        $game = new GuessingNumberGame(new StubGenerator(5));

        self::assertEquals('lower', $game->play(6));
        self::assertEquals('higher', $game->play(4));
        self::assertEquals('loose', $game->play(7));
    }

    public function test_3_attempts_win(): void
    {
        $game = new GuessingNumberGame(new StubGenerator(5));

        self::assertEquals('lower', $game->play(6));
        self::assertEquals('higher', $game->play(4));
        self::assertEquals('win', $game->play(5));
    }

    public function test_game_over(): void
    {
        $game = new GuessingNumberGame(new StubGenerator(5));

        self::assertEquals('lower', $game->play(6));
        self::assertEquals('higher', $game->play(4));
        self::assertEquals('loose', $game->play(7));
        self::assertEquals('game over', $game->play(5));
    }
}
