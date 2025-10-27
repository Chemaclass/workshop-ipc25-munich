<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GessingNumberGame;
use PHPUnit\Framework\TestCase;

final class GessingNumberGameTest extends TestCase
{
    public function test_change_me(): void
    {
        $changeMe = new GessingNumberGame();

        self::assertEquals(GessingNumberGame::WIN, $changeMe->guessNumber(5));
    }   

    public function test_multiple_guesses(): void
    {
        $changeMe = new GessingNumberGame();

        self::assertEquals(GessingNumberGame::WIN, $changeMe->guessNumber(10));
        self::assertEquals(GessingNumberGame::WIN, $changeMe->guessNumber(3));
        self::assertEquals(GessingNumberGame::WIN, $changeMe->guessNumber(5));
    }
}
