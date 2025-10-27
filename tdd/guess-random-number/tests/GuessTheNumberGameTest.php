<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GuessTheNumberGame;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class GuessTheNumberGameTest extends TestCase
{
    public function testMultipleGuessLose(): void
    {
        $guessTheNumberGame = new GuessTheNumberGame(5);
        self::assertEquals("lower", $guessTheNumberGame->guess(8));
        self::assertEquals("higher", $guessTheNumberGame->guess(3));
        self::assertEquals("You lose!", $guessTheNumberGame->guess(4));
    }

    public function testMultipleGuessWin(): void
    {
        $guessTheNumberGame = new GuessTheNumberGame(5);
        self::assertEquals("lower", $guessTheNumberGame->guess(8));
        self::assertEquals("higher", $guessTheNumberGame->guess(3));
        self::assertEquals("You win!", $guessTheNumberGame->guess(5));
    }

    public function testRandomNumber(): void
    {
        $randomNumber = rand(1, 10);
        $guessTheNumberGame = new GuessTheNumberGame($randomNumber);
        self::assertEquals("lower", $guessTheNumberGame->guess($randomNumber+1));
        self::assertEquals("higher", $guessTheNumberGame->guess($randomNumber-1));
        self::assertEquals("You win!", $guessTheNumberGame->guess($randomNumber));
    }

    #[DataProvider('tries')]
    public function testTries(string $result, $guess, $rightNumber): void
    {
        $guessTheNumberGame = new GuessTheNumberGame($rightNumber);
        self::assertEquals($result, $guessTheNumberGame->guess($guess));

    }

    public static function tries():iterable{
        yield ['higher', 4, 5];
        yield ['lower', 6, 5];
        yield ['You win!', 5, 5];
    }
}
