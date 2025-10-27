<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GuessRandomNumberGame;
use PHPUnit\Framework\TestCase;

final class GuessRandomNumberGameTest extends TestCase
{
    public function test_number_even()
    {
        $changeMe = new GuessRandomNumberGame();

        self::assertEquals('even', $changeMe->game(5));
    }

    public function test_number_is_higher()
    {
        $changeMe = new GuessRandomNumberGame();
        self::assertEquals('higher', $changeMe->game(10));
    }

    public function test_number_is_lower()
    {
        $changeMe = new GuessRandomNumberGame();
        self::assertSame('lower', $changeMe->game(1));
    }
}
