<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GuessTheNumberGame;
use PHPUnit\Framework\TestCase;

final class GuessTheNumberGameTest extends TestCase
{
    public function test_change_me(): void
    {
        $changeMe = new GuessTheNumberGame();

        self::assertTrue($changeMe->changeMe());
    }
}
