<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GuessingNumberGame;
use PHPUnit\Framework\TestCase;

final class GuessingNumberGameTest extends TestCase
{
    public function test_change_me(): void
    {
        $game = new GuessingNumberGame();

        self::assertTrue($game->play(5));
    }
}
