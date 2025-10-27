<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GuessTheNumberGame;
use PHPUnit\Framework\TestCase;

final class GuessTheNumberGameTest extends TestCase
{
    public function test_change_me(): void
    {
        $guessTheNumberGame = new GuessTheNumberGame();

        self::assertTrue($guessTheNumberGame->changeMe());
    }

    public function testWinOnFirstGuess(): void
    {
        $guessTheNumberGame = new GuessTheNumberGame(5);
        self::assertTrue($guessTheNumberGame->changeMe());
    }
}
