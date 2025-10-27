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

    public function testGuessLower(): void
    {
        $guessTheNumberGame = new GuessTheNumberGame(5);
        self::assertEquals("lower", $guessTheNumberGame->guess(8));
    }

    public function testGuessHigher(): void
    {
        $guessTheNumberGame = new GuessTheNumberGame(5);
        self::assertEquals("higher", $guessTheNumberGame->guess(3));
    }

    public function testMultipleGuess(): void
    {
        $guessTheNumberGame = new GuessTheNumberGame(5);
        self::assertEquals("lower", $guessTheNumberGame->guess(8));
        self::assertEquals("higher", $guessTheNumberGame->guess(3));
        self::assertEquals("You lose!", $guessTheNumberGame->guess(4));
    }
}
