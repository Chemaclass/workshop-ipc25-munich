<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissorsGame;
use PHPUnit\Framework\TestCase;

final class RockPaperScissorsGameTest extends TestCase
{

    public function test_compare_hands_with_rock_and_scissors(): void
    {
        $changeMe = new RockPaperScissorsGame();
        $result = $changeMe->play('rock', 'scissors');
        self::assertEquals('Player 1', $result);
    }


}
