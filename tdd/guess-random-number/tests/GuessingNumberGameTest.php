<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GuessingNumberGame;
use PHPUnit\Framework\TestCase;

final class GuessingNumberGameTest extends TestCase
{
    public function test_same_number(): void
    {
        $game = new GuessingNumberGame(5);

        self::assertEquals('win', $game->play(5));
    }

    public function test_lower_number(): void
    {
        $game = new GuessingNumberGame(5);

        self::assertEquals('higher', $game->play(4));
    }
    
    public function test_higher_number(): void
    {
        $game = new GuessingNumberGame(5);

        self::assertEquals('lower', $game->play(6));
    }

    public function test_3_attempts(): void
    {
        $game = new GuessingNumberGame(5);

        self::assertEquals('lower', $game->play(6));
        self::assertEquals('higher', $game->play(4));
        self::assertEquals('loose', $game->play(7));
    }
}
