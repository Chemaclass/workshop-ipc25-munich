<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GuessTheNumberGame;
use PHPUnit\Framework\TestCase;

final class GuessTheNumberGameTest extends TestCase
{

    public function testWinOnFirstGuess(): void
    {
        $guessTheNumberGame = new GuessTheNumberGame(5);
        self::assertEquals("You win!", $guessTheNumberGame->guess(5));
    }

    public function testWinOnMultipleGuesses(): void
    {
        $guessTheNumberGame = new GuessTheNumberGame(5);
        self::assertEquals("lower", $guessTheNumberGame->guess(8));
    }
}
