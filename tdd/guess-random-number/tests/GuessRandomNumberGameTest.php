<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GuessRandomNumberGame;
use PHPUnit\Framework\TestCase;

final class GuessRandomNumberGameTest extends TestCase
{
    public function test_number_five()
    {
        $changeMe = new GuessRandomNumberGame();

        self::assertTrue($changeMe->game(5));
    }

    public function test_number_one()
    {
        $changeMe = new GuessRandomNumberGame();

        self::assertFalse($changeMe->game(1));
    }

    public function test_number_ten()
    {
        $changeMe = new GuessRandomNumberGame();
        self::assertFalse($changeMe->game(10));
    }

    public function test_number_is_lower()
    {
        $changeMe = new GuessRandomNumberGame();
        self::assertSame('lower', $changeMe->game(1));
    }
}
