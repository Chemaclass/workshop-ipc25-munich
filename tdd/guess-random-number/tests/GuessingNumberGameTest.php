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

        self::assertTrue($game->play(5));
    }
}
