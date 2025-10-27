<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GessingNumberGame;
use Kata\StubGenerator;
use PHPUnit\Framework\TestCase;

final class GessingNumberGameTest extends TestCase
{
    public function test_change_me(): void
    {
        $changeMe = new GessingNumberGame(new StubGenerator(5));

        self::assertEquals(GessingNumberGame::WIN, $changeMe->guessNumber(5));
    }

    public function test_multiple_guesses(): void
    {
        $changeMe = new GessingNumberGame(new StubGenerator(5));

        self::assertEquals(GessingNumberGame::LOWER, $changeMe->guessNumber(10));
        self::assertEquals(GessingNumberGame::HIGHER, $changeMe->guessNumber(3));
        self::assertEquals(GessingNumberGame::WIN, $changeMe->guessNumber(5));
    }
}
